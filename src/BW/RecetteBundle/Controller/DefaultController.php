<?php

namespace BW\RecetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BWRecetteBundle:Default:index.html.twig');
    }
}
