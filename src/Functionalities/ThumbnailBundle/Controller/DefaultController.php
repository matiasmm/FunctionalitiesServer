<?php

namespace Functionalities\ThumbnailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ThumbnailBundle:Default:index.html.twig');
    }
}
