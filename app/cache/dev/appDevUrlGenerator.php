<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_assetic_f567677' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f567677',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f567677.css',    ),  ),  4 =>   array (  ),),
        '_assetic_f567677_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f567677',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f567677_z_recto_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_fb603a4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fb603a4',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/fb603a4.js',    ),  ),  4 =>   array (  ),),
        '_assetic_fb603a4_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fb603a4',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/fb603a4_jquery-1.10.2.min_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_8c7118d' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '8c7118d',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/8c7118d.js',    ),  ),  4 =>   array (  ),),
        '_assetic_8c7118d_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '8c7118d',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/8c7118d_jquery.smartWizard-2.0.min_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_8116159' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 8116159,    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/8116159.js',    ),  ),  4 =>   array (  ),),
        '_assetic_8116159_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 8116159,    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/8116159_bootstrap.min_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_625ac1e' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '625ac1e',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/625ac1e.js',    ),  ),  4 =>   array (  ),),
        '_assetic_625ac1e_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '625ac1e',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/625ac1e_index_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0f171f9' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0f171f9',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/0f171f9.css',    ),  ),  4 =>   array (  ),),
        '_assetic_0f171f9_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0f171f9',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/0f171f9_bootstrap_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_34453e1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '34453e1',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/34453e1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_34453e1_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '34453e1',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/34453e1_index_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_75fbf9c' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '75fbf9c',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/75fbf9c.css',    ),  ),  4 =>   array (  ),),
        '_assetic_75fbf9c_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '75fbf9c',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/75fbf9c_smart_wizard_1.css',    ),  ),  4 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'jdr_corp_index_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JdrCorp\\IndexBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'jdr_corp_guildes_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JdrCorp\\GuildesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/guildes',    ),  ),  4 =>   array (  ),),
        'Elric' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/elric',    ),  ),  4 =>   array (  ),),
        'Elric_Metier_Comp' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::getCompMetierAction',  ),  2 =>   array (    'page' => '\\d+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/elric/metierComp',    ),  ),  4 =>   array (  ),),
        'Elric_Create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JdrCorp\\ElricBundle\\Controller\\ElricController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/elric/create',    ),  ),  4 =>   array (  ),),
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
