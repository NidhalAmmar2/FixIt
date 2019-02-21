<?php

namespace FixItBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user=null;
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }
        if(in_array('ROLE_ADMIN',$user->getRoles()))
        {
            return $this->redirectToRoute('control_panel' , array('user'=>$user));
        }
        return $this->redirectToRoute('fixit_homepage',array('user'=>$user));
    }
}
