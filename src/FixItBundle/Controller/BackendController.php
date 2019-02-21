<?php

namespace FixItBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('FixItBundle:Default:index.html.twig');
    }
    public function HomeAction()
    {
        return $this->render('@FixIt/Backend/Home.html.twig');
    }
}
