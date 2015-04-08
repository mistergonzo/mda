<?php

namespace MedAlfa\TherapistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MedAlfaBundle:Default:index.html.twig', array('name' => $name));
    }
}
