<?php

namespace crawler\lbccrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use crawler\lbccrawlerBundle\Entity\Ad;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {

		$em = $this->getDoctrine()->getManager();
		$ad_repo = $this->getDoctrine()->getRepository("crawlerlbccrawlerBundle:Ad");
		$parser = $this->get("lbc_parser");

    	$url = "http://www.leboncoin.fr/image_son/offres/haute_normandie/occasions/?f=a&th=1&q=Sony+ta+OR+ampli+Sony+OR+sony+st+OR+tuner+sony+OR+Sony+ps+OR+platine+Sony+OR+sony+cd+OR+sony+sb+OR+sony+tc+OR+sony+cassette+OR+sony+deck+OR+sony+str+OR+sony+receiver";
		$ads_links = $parser->parseListPage($url);

        foreach($ads_links as $ad_link){

            ini_set("max_execution_time", "30");

            //vérifie si existe... si oui, arrête tout ça
            if ($ad_repo->findByUrl($ad_link)){
                break;
            }

            $ad = $parser->parseDetailPage($ad_link);
            $em->persist($ad);
        }

		$em->flush();

        return $this->redirect($this->generateUrl('crawlerlbccrawler_homepage'));
    }

    public function showAllAction()
    {
		$ad_repo = $this->getDoctrine()->getRepository("crawlerlbccrawlerBundle:Ad");
    	// $ads= $ad_repo->findAll();
    	// $ads= $ad_repo->findBy(array('isPublish' => 1), array('publishedDate' => 'DESC'));
    	$ads= $ad_repo->loadAll();

    	$params = array(
    		"ads" => $ads
    	);

    	return $this->render('crawlerlbccrawlerBundle:Default:showAll.html.twig', $params);
    }

    public function detailAction($id){
    	$ad_repo = $this->getDoctrine()->getRepository("crawlerlbccrawlerBundle:Ad");
    	$ad = $ad_repo->find($id);

    	$params = array(
    		"ad" => $ad
    	);
    	return $this->render('crawlerlbccrawlerBundle:Default:detail.html.twig', $params);
    }

    public function removeAction(Request $request, $id){
    	$em = $this->getDoctrine()->getManager();
    	$ad = $this->getDoctrine()->getRepository("crawlerlbccrawlerBundle:Ad")->find($id);

    	$ad->setIsPublish(false);
    	$em->persist($ad);
	    $em->flush();

	    if($request->isXmlHttpRequest()) {
	    	$response = new JsonResponse();
			$response->setData(array(
				'success' => true
			));
	    }else{
	    	$response = $this->redirect($this->generateUrl('crawlerlbccrawler_homepage'));
	    }
	    return $response;
    }

    public function sendAdsAction(){
    	$message_content = '';
		$ad_repo = $this->getDoctrine()->getRepository("crawlerlbccrawlerBundle:Ad");

		$ads = $ad_repo->findBy(array("isPublish" => 1), array('publishedDate' => 'DESC'));

		 foreach ($ads as $ad) {
            $message_content .= '<a href="'.$ad->getUrl().'">'.$ad->getTitle() . '</a><br>';
            $images = $ad->getImages();
            if( count( $images ) > 0 ){
                $image = $images[0];
                $message_content .= '<img src="'.$image->getUrl().'" style="width:350px; height:300px;">';
            }

            $message_content .= '<br>';
        }

    	// envoie le mail
        $mail = \Swift_Message::newInstance()
                    ->setSubject('New Update')
                    ->setFrom("arthur.hamon76@gmail.com")
                    ->setTo("arthur.hamon76@gmail.com")
                    ->setBody($message_content, 'text/html');
        $this->get('mailer')->send($mail);

        return $this->redirect($this->generateUrl('crawlerlbccrawler_homepage'));
    }
}
