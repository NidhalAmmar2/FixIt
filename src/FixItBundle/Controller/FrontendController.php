<?php

namespace FixItBundle\Controller;

use FixItBundle\Entity\Offre;
use FixItBundle\Entity\Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontendController extends Controller
{
    public function indexAction()
    {
        return $this->render('FixItBundle:Frontend:Home.html.twig');
    }
    public function HomeAction()
    {
        return $this->render('@FixIt/Frontend/Home.html.twig');
    }
    public function servicesAction()
    {
        $services = $this->getDoctrine()->getRepository(Service::class)->findAll();
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        return $this->render('@FixIt/Frontend/services.html.twig' , array('services'=>$services ,'offres' =>$offres ) );
    }
    public function aboutusAction()
    {
        return $this->render('@FixIt/Frontend/aboutus.html.twig');
    }
    public function contactusAction()
    {
        return $this->render('@FixIt/Frontend/contactus.html.twig');
    }
    public function galleryAction()
    {
        return $this->render('@FixIt/Frontend/gallery.html.twig');
    }
    public function AddOffreAction()
    {
        return $this->render('@FixIt/Frontend/AddOffre.html.twig');
    }
    public function AddServiceAction()
    {
        return $this->render('@FixIt/Frontend/AddService.html.twig');
    }

}
