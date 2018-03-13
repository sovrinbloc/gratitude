<?php

namespace GratitudeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GratitudeBundle:Default:index.html.twig');
    }
}
