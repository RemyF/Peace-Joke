<?php

namespace PJ\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PJPlatformBundle:Default:index.html.twig');
    }
}
