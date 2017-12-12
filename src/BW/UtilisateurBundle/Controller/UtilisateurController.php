<?php

namespace BW\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller{

	public function indexAction(){
        return $this->render('BWUtilisateurBundle:Utilisateur:utilisateur.html.twig');
    }
}
