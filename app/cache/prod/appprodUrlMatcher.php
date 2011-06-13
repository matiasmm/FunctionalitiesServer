<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _client
        if ($pathinfo === '/client') {
            return array (  '_controller' => 'Client\\ClientBundle\\Controller\\ClientController::testServiceAction',  '_route' => '_client',);
        }

        // _service_provider
        if (0 === strpos($pathinfo, '/server') && preg_match('#^/server/(?P<object_name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'App\\ServerBundle\\Controller\\ServerController::getServiceAction',)), array('_route' => '_service_provider'));
        }

        // app_configureapplication_configureapplication_getservice
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_configureapplication_configureapplication_getservice');
            }
            return array (  '_controller' => 'App\\ConfigureApplicationBundle\\Controller\\ConfigureApplicationController::getServiceAction',  '_route' => 'app_configureapplication_configureapplication_getservice',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
