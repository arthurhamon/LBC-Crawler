<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/assets/js/compiled/all')) {
            // _assetic_a3c5fa2
            if ($pathinfo === '/assets/js/compiled/all.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2',);
            }

            if (0 === strpos($pathinfo, '/assets/js/compiled/all_')) {
                // _assetic_a3c5fa2_0
                if ($pathinfo === '/assets/js/compiled/all_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_0',);
                }

                if (0 === strpos($pathinfo, '/assets/js/compiled/all_part_')) {
                    if (0 === strpos($pathinfo, '/assets/js/compiled/all_part_2_')) {
                        // _assetic_a3c5fa2_1
                        if ($pathinfo === '/assets/js/compiled/all_part_2_application_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_1',);
                        }

                        // _assetic_a3c5fa2_2
                        if ($pathinfo === '/assets/js/compiled/all_part_2_bootstrap.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_2',);
                        }

                        if (0 === strpos($pathinfo, '/assets/js/compiled/all_part_2_h')) {
                            // _assetic_a3c5fa2_3
                            if ($pathinfo === '/assets/js/compiled/all_part_2_holder_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_3',);
                            }

                            // _assetic_a3c5fa2_4
                            if ($pathinfo === '/assets/js/compiled/all_part_2_html5shiv_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_4',);
                            }

                        }

                        // _assetic_a3c5fa2_5
                        if ($pathinfo === '/assets/js/compiled/all_part_2_jquery-1.10.1.min_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_5',);
                        }

                        // _assetic_a3c5fa2_6
                        if ($pathinfo === '/assets/js/compiled/all_part_2_respond.min_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_6',);
                        }

                        // _assetic_a3c5fa2_7
                        if ($pathinfo === '/assets/js/compiled/all_part_2_site.min_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_7',);
                        }

                    }

                    // _assetic_a3c5fa2_8
                    if ($pathinfo === '/assets/js/compiled/all_part_3_script_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a3c5fa2',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_a3c5fa2_8',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
