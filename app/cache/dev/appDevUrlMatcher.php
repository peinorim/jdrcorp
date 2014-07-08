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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/5a2fce2')) {
                // _assetic_5a2fce2
                if ($pathinfo === '/js/5a2fce2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5a2fce2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5a2fce2',);
                }

                // _assetic_5a2fce2_0
                if ($pathinfo === '/js/5a2fce2_cdb_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5a2fce2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5a2fce2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/8c5da37')) {
                // _assetic_8c5da37
                if ($pathinfo === '/js/8c5da37.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8c5da37',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8c5da37',);
                }

                // _assetic_8c5da37_0
                if ($pathinfo === '/js/8c5da37_dice_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8c5da37',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8c5da37_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/2a2fbda')) {
                // _assetic_2a2fbda
                if ($pathinfo === '/js/2a2fbda.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2a2fbda',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2a2fbda',);
                }

                // _assetic_2a2fbda_0
                if ($pathinfo === '/js/2a2fbda_jquery-1.10.2.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2a2fbda',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2a2fbda_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/33654a5')) {
                // _assetic_33654a5
                if ($pathinfo === '/js/33654a5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '33654a5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_33654a5',);
                }

                // _assetic_33654a5_0
                if ($pathinfo === '/js/33654a5_jquery.smartWizard-2.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '33654a5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_33654a5_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/b')) {
                if (0 === strpos($pathinfo, '/js/ba32e21')) {
                    // _assetic_ba32e21
                    if ($pathinfo === '/js/ba32e21.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba32e21',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ba32e21',);
                    }

                    // _assetic_ba32e21_0
                    if ($pathinfo === '/js/ba32e21_bootstrap.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba32e21',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ba32e21_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/bec2743')) {
                    // _assetic_bec2743
                    if ($pathinfo === '/js/bec2743.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bec2743',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bec2743',);
                    }

                    // _assetic_bec2743_0
                    if ($pathinfo === '/js/bec2743_index_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bec2743',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bec2743_0',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/e3daeaa')) {
                // _assetic_e3daeaa
                if ($pathinfo === '/css/e3daeaa.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3daeaa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e3daeaa',);
                }

                // _assetic_e3daeaa_0
                if ($pathinfo === '/css/e3daeaa_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3daeaa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e3daeaa_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/3563e27')) {
                // _assetic_3563e27
                if ($pathinfo === '/css/3563e27.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3563e27',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3563e27',);
                }

                // _assetic_3563e27_0
                if ($pathinfo === '/css/3563e27_index_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3563e27',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3563e27_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/ef6aac0')) {
                // _assetic_ef6aac0
                if ($pathinfo === '/css/ef6aac0.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef6aac0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ef6aac0',);
                }

                // _assetic_ef6aac0_0
                if ($pathinfo === '/css/ef6aac0_smart_wizard_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef6aac0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ef6aac0_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/efd3992')) {
            // _assetic_efd3992
            if ($pathinfo === '/js/efd3992.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'efd3992',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_efd3992',);
            }

            // _assetic_efd3992_0
            if ($pathinfo === '/js/efd3992_index_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'efd3992',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_efd3992_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/2c2f727')) {
            // _assetic_2c2f727
            if ($pathinfo === '/css/2c2f727.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2c2f727',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2c2f727',);
            }

            // _assetic_2c2f727_0
            if ($pathinfo === '/css/2c2f727_index_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2c2f727',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2c2f727_0',);
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

        if (0 === strpos($pathinfo, '/jdrcorp')) {
            // jdr_corp_index_homepage
            if (rtrim($pathinfo, '/') === '/jdrcorp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'jdr_corp_index_homepage');
                }

                return array (  '_controller' => 'JdrCorp\\IndexBundle\\Controller\\IndexController::indexAction',  '_route' => 'jdr_corp_index_homepage',);
            }

            // jdr_corp_index_homepage_duplicate
            if ($pathinfo === '/jdrcorp/index') {
                return array (  '_controller' => 'JdrCorp\\IndexBundle\\Controller\\IndexController::indexAction',  '_route' => 'jdr_corp_index_homepage_duplicate',);
            }

            // profile
            if ($pathinfo === '/jdrcorp/profile') {
                return array (  '_controller' => 'JdrCorp\\IndexBundle\\Controller\\IndexController::profileAction',  '_route' => 'profile',);
            }

            if (0 === strpos($pathinfo, '/jdrcorp/guildes')) {
                // Guildes
                if ($pathinfo === '/jdrcorp/guildes') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::indexAction',  '_route' => 'Guildes',);
                }

                // Guildes_duplicate
                if (rtrim($pathinfo, '/') === '/jdrcorp/guildes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Guildes_duplicate');
                    }

                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::indexAction',  '_route' => 'Guildes_duplicate',);
                }

                // Guildes_duplicate_2
                if ($pathinfo === '/jdrcorp/guildes/index') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::indexAction',  '_route' => 'Guildes_duplicate_2',);
                }

                // Guildes_comp
                if ($pathinfo === '/jdrcorp/guildes/comp') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\CompController::compAction',  '_route' => 'Guildes_comp',);
                }

                // Guildes_links
                if (0 === strpos($pathinfo, '/jdrcorp/guildes/links') && preg_match('#^/jdrcorp/guildes/links/(?P<type>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_Guildes_links;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Guildes_links')), array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\CompController::linksAction',));
                }
                not_Guildes_links:

                // Guildes_artefacts
                if ($pathinfo === '/jdrcorp/guildes/artefacts') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::artefactsAction',  '_route' => 'Guildes_artefacts',);
                }

                // Guildes_dice
                if ($pathinfo === '/jdrcorp/guildes/dice') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::diceAction',  '_route' => 'Guildes_dice',);
                }

                // Guildes_cdb
                if ($pathinfo === '/jdrcorp/guildes/cdb') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\CDBController::cdbAction',  '_route' => 'Guildes_cdb',);
                }

                // Guildes_loom
                if ($pathinfo === '/jdrcorp/guildes/loom') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::loomAction',  '_route' => 'Guildes_loom',);
                }

                // Guildes_armes
                if ($pathinfo === '/jdrcorp/guildes/armes') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::armesAction',  '_route' => 'Guildes_armes',);
                }

                // Guildes_equipement
                if ($pathinfo === '/jdrcorp/guildes/equipement') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::equipementAction',  '_route' => 'Guildes_equipement',);
                }

                // Guildes_machinations
                if ($pathinfo === '/jdrcorp/guildes/machinations') {
                    return array (  '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\GuildesController::machinationAction',  '_route' => 'Guildes_machinations',);
                }

            }

            if (0 === strpos($pathinfo, '/jdrcorp/elric')) {
                // Elric
                if ($pathinfo === '/jdrcorp/elric') {
                    return array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::indexAction',  '_route' => 'Elric',);
                }

                // Elric_Metier_Comp
                if (0 === strpos($pathinfo, '/jdrcorp/elric/metierComp') && preg_match('#^/jdrcorp/elric/metierComp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_Elric_Metier_Comp;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Elric_Metier_Comp')), array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::getCompMetierAction',));
                }
                not_Elric_Metier_Comp:

                // Elric_Create
                if ($pathinfo === '/jdrcorp/elric/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_Elric_Create;
                    }

                    return array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::createAction',  '_route' => 'Elric_Create',);
                }
                not_Elric_Create:

                // Elric_review
                if (0 === strpos($pathinfo, '/jdrcorp/elric/review') && preg_match('#^/jdrcorp/elric/review/(?P<id>[^/]++)/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_Elric_review;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Elric_review')), array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::reviewAction',));
                }
                not_Elric_review:

                // Elric_delete_fiche
                if (0 === strpos($pathinfo, '/jdrcorp/elric/delete') && preg_match('#^/jdrcorp/elric/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_Elric_delete_fiche;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Elric_delete_fiche')), array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::deleteAction',));
                }
                not_Elric_delete_fiche:

            }

            if (0 === strpos($pathinfo, '/jdrcorp/register')) {
                // register
                if ($pathinfo === '/jdrcorp/register') {
                    return array (  '_controller' => 'JdrCorp\\IndexBundle\\Controller\\IndexController::registerAction',  '_route' => 'register',);
                }

                // register_submit
                if ($pathinfo === '/jdrcorp/register/submit') {
                    return array (  '_controller' => 'JdrCorp\\IndexBundle\\Controller\\IndexController::register_submitAction',  '_route' => 'register_submit',);
                }

            }

            // login
            if ($pathinfo === '/jdrcorp/login') {
                return array (  '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::indexAction',  '_route' => 'login',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
