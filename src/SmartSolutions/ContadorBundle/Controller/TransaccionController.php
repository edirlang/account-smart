<?php

namespace SmartSolutions\ContadorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SmartSolutions\ContadorBundle\Entity\CuentasTransacion;
use SmartSolutions\ContadorBundle\Form\CuentasTransacionType;

/**
 * Transaccion controller.
 *
 */
class TransaccionController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SmartSolutionsContadorBundle:Transaccion')->findAll();

        return $this->render('SmartSolutionsContadorBundle:Transaccion:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SmartSolutionsContadorBundle:CuentasTransacion')->findAll();
        return $this->render('SmartSolutionsContadorBundle:Transaccion:new.html.twig', array('cuentas' => $entities, ));
    }

}
