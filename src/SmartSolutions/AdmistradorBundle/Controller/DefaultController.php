<?php

namespace SmartSolutions\AdmistradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartSolutionsAdmistradorBundle:Default:index.html.twig', array('name' => $name));
    }
}
