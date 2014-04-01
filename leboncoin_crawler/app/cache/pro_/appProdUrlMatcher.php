<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // crawlerlbccrawler_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'crawlerlbccrawler_homepage');
            }

            return array (  '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::showAllAction',  '_route' => 'crawlerlbccrawler_homepage',);
        }

        // crawlerlbccrawler_parse
        if ($pathinfo === '/parse') {
            return array (  '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'crawlerlbccrawler_parse',);
        }

        // crawlerlbccrawler_detail
        if (0 === strpos($pathinfo, '/detail') && preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crawlerlbccrawler_detail')), array (  '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::detailAction',));
        }

        // crawlerlbccrawler_remove
        if (0 === strpos($pathinfo, '/remove') && preg_match('#^/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crawlerlbccrawler_remove')), array (  '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::removeAction',));
        }

        // crawlerlbccrawler_sendAds
        if ($pathinfo === '/sendAds') {
            return array (  '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::sendAdsAction',  '_route' => 'crawlerlbccrawler_sendAds',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
