<?php

namespace SmartSolutions\AdmistradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartSolutionsAdmistradorBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction(Request $request)
	{
	    $authenticationUtils = $this->get('security.authentication_utils');

	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    return $this->render(
	        'SmartSolutionsAdmistradorBundle:Default:index.html.twig',
	        array(
	            // last username entered by the user
	            'last_username' => $lastUsername,
	            'error'         => $error,
	        )
	    );
	}

	public function loginCheckAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SmartSolutionsAdmistradorBundle:Clientes')->findAll();

        return $this->render('SmartSolutionsAdmistradorBundle:Clientes:index.html.twig', array(
            'entities' => $entities,
        ));
        // this controller will not be executed,
        // as the route is handled by the Security system
    }
}
