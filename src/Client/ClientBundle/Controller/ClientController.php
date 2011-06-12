<?php

namespace Client\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ClientController extends Controller
{
    public function testServiceAction()
    {
        $resp = $this->get("fs_client")
            ->get("thumbnail")
            ->getName();
        var_dump($resp);
    }
}
