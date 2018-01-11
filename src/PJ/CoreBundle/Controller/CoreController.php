<?php

namespace PJ\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('PJCoreBundle:Core:index.html.twig');
    }
}