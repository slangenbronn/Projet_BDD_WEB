<?php

namespace BW\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
	public function indexAction(){

		// Select username, nom, prenom, adrMail, role? from  utilisateur
		//
		$em = $this->getDoctrine()->getManager();
		$utilisateurRepository = $em->getRepository('BWUtilisateurBundle:Utilisateur');


		$tabUtilisateur = $utilisateurRepository->findAll();
        return $this->render('BWUtilisateurBundle:Admin:index.html.twig', array('tabUti' => $tabUtilisateur));
    }
}
