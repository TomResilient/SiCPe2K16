<?php

namespace Platform\SubjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SubjectsBundle:Default:index.html.twig');
    }
}
