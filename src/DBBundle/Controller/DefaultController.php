<?php

namespace Platform\DBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlatformDBBundle:Default:index.html.twig');
    }
}
