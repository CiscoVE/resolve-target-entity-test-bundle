<?php

namespace Cisco\ResolveTargetEntityTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cisco\ResolveTargetEntityTestBundle\Entity\Audit;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render(
                'CiscoResolveTargetEntityTestBundle:Default:index.html.twig',
                array(
                    'audits' => $this->getDoctrine()
                                     ->getRepository( 'CiscoResolveTargetEntityTestBundle:Audit' )
                                     ->findAll(),
        ));
    }
    
    public function addAction( Request $request )
    {
        // Create new Audit instance
        $audit = new Audit();
        // Get entity manager
        $em = $this->getDoctrine()->getEntityManager();
        // Create form object using form type service and Audit instance
        $form = $this->createForm(
                    $this->container->get( 'cisco.formtype.audit' ),
                    $audit
        );
        if ( 'POST' == $request->getMethod() )
        {
            // POST request submitted, bind form data
            $form->bind( $request );
            if ( $form->isValid() )
            {
                // Form data valid, persist entity
                $em->persist( $audit );
                $em->flush();
                // Redirect to list
                return $this->redirect( $this->generateUrl( 'audits' ));
            }
        }
        // Render template with form
        return $this->render(
                'CiscoResolveTargetEntityTestBundle:Default:add.html.twig',
                array(
                    'form' => $form->createView(),
        ));
    }
}
