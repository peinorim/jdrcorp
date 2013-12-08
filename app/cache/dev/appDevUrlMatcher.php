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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/f567677')) {
                // _assetic_f567677
                if ($pathinfo === '/css/f567677.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f567677',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f567677',);
                }

                // _assetic_f567677_0
                if ($pathinfo === '/css/f567677_z_recto_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f567677',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f567677_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/b7686c0')) {
                // _assetic_b7686c0
                if ($pathinfo === '/css/b7686c0.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b7686c0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b7686c0',);
                }

                // _assetic_b7686c0_0
                if ($pathinfo === '/css/b7686c0_z_recto_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b7686c0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b7686c0_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/fb603a4')) {
                // _assetic_fb603a4
                if ($pathinfo === '/js/fb603a4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fb603a4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fb603a4',);
                }

                // _assetic_fb603a4_0
                if ($pathinfo === '/js/fb603a4_jquery-1.10.2.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fb603a4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fb603a4_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/8')) {
                if (0 === strpos($pathinfo, '/js/8c7118d')) {
                    // _assetic_8c7118d
                    if ($pathinfo === '/js/8c7118d.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8c7118d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8c7118d',);
                    }

                    // _assetic_8c7118d_0
                    if ($pathinfo === '/js/8c7118d_jquery.smartWizard-2.0.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8c7118d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8c7118d_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/8116159')) {
                    // _assetic_8116159
                    if ($pathinfo === '/js/8116159.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 8116159,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8116159',);
                    }

                    // _assetic_8116159_0
                    if ($pathinfo === '/js/8116159_bootstrap.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 8116159,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8116159_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/625ac1e')) {
                // _assetic_625ac1e
                if ($pathinfo === '/js/625ac1e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '625ac1e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_625ac1e',);
                }

                // _assetic_625ac1e_0
                if ($pathinfo === '/js/625ac1e_index_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '625ac1e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_625ac1e_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/0f171f9')) {
                // _assetic_0f171f9
                if ($pathinfo === '/css/0f171f9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0f171f9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0f171f9',);
                }

                // _assetic_0f171f9_0
                if ($pathinfo === '/css/0f171f9_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0f171f9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0f171f9_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/34453e1')) {
                // _assetic_34453e1
                if ($pathinfo === '/css/34453e1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '34453e1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_34453e1',);
                }

                // _assetic_34453e1_0
                if ($pathinfo === '/css/34453e1_index_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '34453e1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_34453e1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/75fbf9c')) {
                // _assetic_75fbf9c
                if ($pathinfo === '/css/75fbf9c.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '75fbf9c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_75fbf9c',);
                }

                // _assetic_75fbf9c_0
                if ($pathinfo === '/css/75fbf9c_smart_wizard_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '75fbf9c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_75fbf9c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/957c351')) {
                // _assetic_957c351
                if ($pathinfo === '/css/957c351.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '957c351',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_957c351',);
                }

                if (0 === strpos($pathinfo, '/css/957c351_part_1_')) {
                    // _assetic_957c351_0
                    if ($pathinfo === '/css/957c351_part_1_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '957c351',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_957c351_0',);
                    }

                    // _assetic_957c351_1
                    if ($pathinfo === '/css/957c351_part_1_index_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '957c351',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_957c351_1',);
                    }

                    // _assetic_957c351_2
                    if ($pathinfo === '/css/957c351_part_1_smart_wizard_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '957c351',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_957c351_2',);
                    }

                    // _assetic_957c351_3
                    if ($pathinfo === '/css/957c351_part_1_z_recto_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '957c351',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_957c351_3',);
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

        // jdr_corp_index_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'jdr_corp_index_homepage');
            }

            return array (  '_controller' => 'JdrCorp\\IndexBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jdr_corp_index_homepage',);
        }

        // jdr_corp_guildes_homepage
        if ($pathinfo === '/guildes') {
            return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jdr_corp_guildes_homepage',);
        }

        if (0 === strpos($pathinfo, '/elric')) {
            // Elric
            if ($pathinfo === '/elric') {
                return array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::indexAction',  '_route' => 'Elric',);
            }

            // Elric_Metier_Comp
            if (0 === strpos($pathinfo, '/elric/metierComp') && preg_match('#^/elric/metierComp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_Elric_Metier_Comp;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Elric_Metier_Comp')), array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::getCompMetierAction',));
            }
            not_Elric_Metier_Comp:

            // Elric_Create
            if ($pathinfo === '/elric/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_Elric_Create;
                }

                return array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::createAction',  '_route' => 'Elric_Create',);
            }
            not_Elric_Create:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
