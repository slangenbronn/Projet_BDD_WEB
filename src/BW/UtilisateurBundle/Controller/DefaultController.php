<?php

namespace BW\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BWUtilisateurBundle:Default:index.html.twig');
    }
}
