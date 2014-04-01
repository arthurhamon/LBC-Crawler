<?php

namespace crawler\lbccrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;

use crawler\lbccrawlerBundle\Entity\Ad;
use crawler\lbccrawlerBundle\Entity\Image;

use \DateTime;

class DefaultController extends Controller
{
    public function indexAction()
    {

		$em = $this->getDoctrine()->getManager();
		$ad_repo = $this->getDoctrine()->getRepository("crawlerlbccrawlerBundle:Ad");

    	$url = "http://www.leboncoin.fr/image_son/offres/haute_normandie/occasions/?f=a&th=1&q=Sony+ta+OR+ampli+Sony+OR+sony+st+OR+tuner+sony+OR+Sony+ps+OR+platine+Sony+OR+sony+cd+OR+sony+sb+OR+sony+tc+OR+sony+cassette+OR+sony+deck+OR+sony+str+OR+sony+receiver";
		$content = file_get_contents($url);

		$crawler = new Crawler($content);

		$params = array(

		);

		$ads_links = $crawler->filter('.list-lbc a')->each(function ($ad_container, $i) use (&$em, $ad_repo) {

			ini_set("max_execution_time", "30");


			// crée une nouvelle annonce
			$ad = new Ad();

			//extrait le href du lien et l'injecte dans notre annonce
			$ad->setUrl($ad_container->attr("href"));

			// vérifie l'url si ça existe déjà
			if($ad_repo->findByUrl( $ad->getUrl() )){
				return;
			};

			//extrait le titre de l'annonce
			$ad->setTitle( trim( $ad_container->filter(".title")->text() ) );

			//récupère la page de détails de l'annonce
			//pour choper le reste des infos
			$details_content = file_get_contents($ad->getUrl());
			$details_content_crawler = new Crawler( $details_content );

			// recuperation du prix
			$price = null;
			$price_crawler = $details_content_crawler->filter(".price");
			if( $price_crawler->count() != 0 ){
				$price = $price_crawler->text();
				$price = preg_replace("#\D#", "", $price); // Remplacement des espace et du € \D = tous sauf les chiffres
				$ad->setPrice($price);
			}

			// recuperation de la description
			$descrip = trim( $details_content_crawler->filter(".AdviewContent .content")->html() );
			$ad->setDescription($descrip);

			//extrait la date de publication
            $raw_published_date = $details_content_crawler->filter(".upload_by");
            $date_regexp = "#le\s(?P<day>\d{1,2})\s(?P<month>[a-z]{3,12})\sà\s(?P<hour>\d{2}):(?P<minute>\d{2})#";

            $publishedDate = new DateTime();
            if (preg_match($date_regexp, $raw_published_date->text(), $matches)){
                  $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
                  $month = array_search($matches['month'], $months) + 1; //indexé à zéro donc plus un

                  $time = mktime($matches['hour'], $matches['minute'], 0, $month, $matches['day'], date("Y"));
                  $publishedDate = new DateTime();
                  $publishedDate->setTimestamp($time);
            }

            $ad->setPublishedDate( $publishedDate );

			// Recuperation de la ville et du code postal
			$details_content_crawler->filter(".lbcParams tr")->each(function( $node, $i ) use (&$ad) {
				if( $node->filter('th')->text() == "Ville :" ){
					$ad->setCity( trim( $node->filter("td")->text() ) );
				}else if( $node->filter("th")->text() == "Code postal :" ){
					$ad->setZip( trim( $node->filter("td")->text() ) );
				}
			});

			// Image
			$details_content_crawler->filter(".print-lbcImages img")->each(function( $img_crawler, $i ) use (&$ad, $em) {

				$url = $img_crawler->attr("src");

				$url_big = str_replace("/thumbs/", "/images/", $url);
				$url_sma = str_replace("/images/", "/thumbs/", $url_big);

				$img_big = new Image();
				$img_big->setUrl($url_big);
				$img_big->setSize("b");
				$img_big->setAd($ad);

				$img_small = new Image();
				$img_small->setUrl($url_sma);
				$img_small->setSize("s");
				$img_small->setAd($ad);

				$em->persist($img_big);
				$em->persist($img_small);
			});

			$em->persist($ad);

			// var_dump($ad);
			// die();
		});

		$em->flush();

        return $this->render('crawlerlbccrawlerBundle:Default:index.html.twig', $params);
    }

    public function showAllAction()
    {
		$ad_repo = $this->getDoctrine()->getRepository("crawlerlbccrawlerBundle:Ad");
    	// $ads= $ad_repo->findAll();
    	$ads= $ad_repo->findBy(array(), array('publishedDate' => 'DESC'));

    	$params = array(
    		"ads" => $ads
    	);

    	return $this->render('crawlerlbccrawlerBundle:Default:showAll.html.twig', $params);
    }
}
