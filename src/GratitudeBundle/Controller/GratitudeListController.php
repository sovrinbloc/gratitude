<?php

namespace GratitudeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GratitudeListController extends Controller
{
    public function postAction()
    {
        return $this->render('GratitudeBundle:GratitudeList:post.html.twig', array(
            // ...
        ));
    }

    public function validateAction()
    {
        return $this->render('GratitudeBundle:GratitudeList:validate.html.twig', array(
            // ...
        ));
    }

    public function viewAction()
    {
        return $this->render('GratitudeBundle:GratitudeList:view.html.twig', array(
            // ...
        ));
    }

    public function removeAction()
    {
        return $this->render('GratitudeBundle:GratitudeList:remove.html.twig', array(
            // ...
        ));
    }

    public function shareAction()
    {
        return $this->render('GratitudeBundle:GratitudeList:share.html.twig', array(
            // ...
        ));
    }

    public function listAction()
    {
        return $this->render(
            'gratitudelist.html.twig', array(
            // ...
        ));
    }

    public function randomAction()
    {
        return $this->render('GratitudeBundle:GratitudeList:random.html.twig', array(
            // ...
        ));
    }

    public function hintAction()
    {
        return $this->render('GratitudeBundle:GratitudeList:hint.html.twig', array(
            // ...
        ));
    }

}
