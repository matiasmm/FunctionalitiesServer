<?php

namespace App\ConfigureApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter as ParamConverter; 


use Symfony\Component\HttpFoundation\Response;



class ConfigureApplicationController extends Controller
{

    /**
     * @Route("/")
     */
    public function getServiceAction()
    {
        return $this->render("ConfigureApplicationBundle:Frontend:Layout.html.php");
    }
}
