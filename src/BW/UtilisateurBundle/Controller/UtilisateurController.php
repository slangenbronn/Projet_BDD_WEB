<?php

namespace BW\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller{

	public function indexAction(){
    $Recetterepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Recette')
    ;

    $Imagerepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Image')
    ;

    $recette = $Recetterepository->findAll();
    $image = $Imagerepository->findAll();
    $liste_i = array();
    foreach($recette as $r){
      foreach($image as $i){
        if($i->getidrecette() == $r->getidrecette())
          $liste_i[] = $i;
      }
    }

    $count = count($recette);

    return $this->render('BWUtilisateurBundle:Utilisateur:utilisateur.html.twig', array(
      'recette' => $recette,
      'image' => $liste_i,
      'count' => $count));
  	}
}
