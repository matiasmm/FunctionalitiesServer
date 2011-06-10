<?php

namespace App\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ServerController extends Controller
{
    public function getServiceAction($object_name)
    {

        require __DIR__ . '/../../../../vendor/json-rpc-php/jsonRPCServer.php';
                
        $functionality = $this->container->get("functionality." . $object_name);
        
        \jsonRPCServer::handle($functionality);

        return new Response();
    }
}
