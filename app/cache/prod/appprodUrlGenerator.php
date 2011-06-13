<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_client' => true,
       '_service_provider' => true,
       'app_configureapplication_configureapplication_getservice' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, array $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_clientRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Client\\ClientBundle\\Controller\\ClientController::testServiceAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client',  ),));
    }

    private function get_service_providerRouteInfo()
    {
        return array(array (  0 => 'object_name',), array (  '_controller' => 'App\\ServerBundle\\Controller\\ServerController::getServiceAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'object_name',  ),  1 =>   array (    0 => 'text',    1 => '/server',  ),));
    }

    private function getapp_configureapplication_configureapplication_getserviceRouteInfo()
    {
        return array(array (), array (  '_controller' => 'App\\ConfigureApplicationBundle\\Controller\\ConfigureApplicationController::getServiceAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }
}
