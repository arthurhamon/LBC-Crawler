<?php

    namespace crawler\lbccrawlerBundle\Service;

    use Symfony\Component\DomCrawler\Crawler;
    use crawler\lbccrawlerBundle\Entity\Ad;
    use crawler\lbccrawlerBundle\Entity\Image;

    use \DateTime;

    class LbcParserService {

        public function __construct(){

        }

        public function parseListPage($searchUrl){
            //récupère le code source html de la page
            $content = file_get_contents($searchUrl);

            //crée une instance du crawler, avec un contenu à parser
            $crawler = new Crawler($content);

            //ne conserve que les liens dans la div .list-lbc
            $ads_links_crawlers = $crawler->filter(".list-lbc a");

            $ad_links = array();

            //pour chacun des liens...
            //on a accès à un nouveau crawler
            $ads_links_crawlers->each(function (Crawler $ad_container_crawler, $i) use (&$ad_links) {
                $ad_links[] = $ad_container_crawler->attr("href");
            });

            return $ad_links;
        }


        public function parseDetailPage($url){

            //crée une nouvelle annonce
            $ad = new Ad();
            $ad->setUrl( $url );

            //récupère la page de détails de l'annonce
            //pour choper le reste des infos
            $details_content = file_get_contents( $ad->getUrl() );
            $details_content_crawler = new Crawler( $details_content );

            //extrait le titre de l'annonce
            $ad->setTitle( trim( $details_content_crawler->filter("#ad_subject")->text() ));
            $ad->setPrice( $this->extractPrice($details_content_crawler) );

            //extrait le descriptif
            $description = trim( $details_content_crawler->filter(".AdviewContent .content")->html() );
            $ad->setDescription( $description );

            //tableau à gauche
            $details = $this->extractDetails($details_content_crawler);
            if (!empty($details['zip'])){
                $ad->setZip($details['zip']);
            }
            if (!empty($details['city'])){
                $ad->setCity($details['city']);
            }

            //extrait la date de publication
            $ad->setPublishedDate( $this->extractPublishedDate($details_content_crawler) );
            // $ad->setCreatedDate( new DateTime() );

            // extrait les images
            $images = $this->extractImages($details_content_crawler);
            foreach ($images as $image) {
                $image->setAd($ad);
                $ad->addImage($image);
            }

            return $ad;
        }

        //parse les infos dans le petit tableaux à gauche
        private function extractDetails(Crawler $crawler){

            $details = array();
            $crawler->filter(".lbcParams table tr")->each( function(Crawler $ad_info, $i) use (&$details) {

                $label = strtolower( $ad_info->filter("th")->text() );

                $data = $ad_info->filter("td")->text();

                if( strpos($label, "code postal" ) !== false ){
                    $details['zip'] = $data;
                }
                else if( strpos( $label, "ville" ) !== false ){
                    $details['city'] = $data;
                }

            });

            return $details;
        }


        //extrait le prix
        private function extractPrice(Crawler $crawler){
            $price = NULL;
            $price_crawler = $crawler->filter(".price");
            if ( $price_crawler->count() ){
                $price = $price_crawler->text();
                $price = preg_replace("#\D#", "", $price);
            }
            return $price;
        }

        //extrait la date de publication
        private function extractPublishedDate(Crawler $crawler){

            $raw_published_date = $crawler->filter(".upload_by");
            $date_regexp = "#le\s(?P<day>\d{1,2})\s(?P<month>[a-z]{3,12})\sà\s(?P<hour>\d{2}):(?P<minute>\d{2})#";

            $publishedDate = new DateTime();
            if (preg_match($date_regexp, $raw_published_date->text(), $matches)){
                  $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
                  $month = array_search($matches['month'], $months) + 1; //indexé à zéro donc plus un

                  $time = mktime($matches['hour'], $matches['minute'], 0, $month, $matches['day'], date("Y"));
                  $publishedDate = new DateTime();
                  $publishedDate->setTimestamp($time);
            }
            return $publishedDate;
        }

        //extrait les images
        private function extractImages(Crawler $crawler){
            // Image
            $image = array();

            $crawler->filter(".print-lbcImages img")->each(function( $img_crawler, $i ) use (&$image) {

                $url = $img_crawler->attr("src");

                $url_big = str_replace("/thumbs/", "/images/", $url);
                $url_sma = str_replace("/images/", "/thumbs/", $url_big);

                $img_big = new Image();
                $img_big->setUrl($url_big);
                $img_big->setSize("b");
                $image[] = $img_big;

                $img_small = new Image();
                $img_small->setUrl($url_sma);
                $img_small->setSize("s");
                $image[] = $img_small;
            });

            return $image;
        }

    }