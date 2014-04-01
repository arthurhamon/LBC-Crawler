<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'crawlerlbccrawler_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::showAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'crawlerlbccrawler_parse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parse',    ),  ),  4 =>   array (  ),),
        'crawlerlbccrawler_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail',    ),  ),  4 =>   array (  ),),
        'crawlerlbccrawler_remove' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/remove',    ),  ),  4 =>   array (  ),),
        'crawlerlbccrawler_sendAds' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'crawler\\lbccrawlerBundle\\Controller\\DefaultController::sendAdsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sendAds',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
