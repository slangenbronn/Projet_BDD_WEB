<?php

namespace BW\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller{

	public function indexAction(){
    $recetteRepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Recette');

    $listeRecette = $recetteRepository->getListeRecette();
    
    return $this->render('BWUtilisateurBundle:Utilisateur:utilisateur.html.twig', array(
      'listeRecette' => $listeRecette));
  	}
}
