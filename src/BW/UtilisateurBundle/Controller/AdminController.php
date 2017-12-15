<?php

namespace BW\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
	public function indexAction(){
        return $this->render('BWUtilisateurBundle:Admin:index.html.twig');
    }

    public function modifierUtilisateurAction($id){
    	$em = $this->getDoctrine()->getManager();
		$utilisateurRepository = $em->getRepository('BWUtilisateurBundle:Utilisateur');

		$Utilisateur = $utilisateurRepository->find($id);

		if (is_null($Utilisateur)) {
			 throw $this->createNotFoundException('The product does not exist');
		}

		return $this->render('BWUtilisateurBundle:Admin:modifierUtilisateur.html.twig', array('utilisateur' => $Utilisateur));
    }

    public function modificationUtilisateurAction(Request $request){
	    $id = $request->query->get('id');
	    $email = $request->request->get('_email');
		$username = $request->request->get('_username');
		$nom = $request->request->get('_nom');
			$prenom = $request->request->get('_prenom');

	    $em = $this->getDoctrine()->getManager();
		$utilisateurRepository = $em->getRepository('BWUtilisateurBundle:Utilisateur');

		$utilisateur = $utilisateurRepository->find($id);

		// Envoie d'erreur en cas d'utilisateur introuvé
		if (is_null($utilisateur)) {
			 throw $this->createNotFoundException('L\'utilisateur n\'existe pas');
		}

		$utilisateur->setEmail($email);
		$utilisateur->setUsername($username);
		$utilisateur->setNom($nom);
		$utilisateur->setPrenom($prenom);

		$em->persist($utilisateur);
		$em->flush();

		return $this->redirectToRoute('bw_admin_homepage');
    }

    public function suppressionUtilisateurAction(Request $request){
    	$id = $request->query->get('id');

    	$em = $this->getDoctrine()->getManager();
		$utilisateurRepository = $em->getRepository('BWUtilisateurBundle:Utilisateur');

		$utilisateur = $utilisateurRepository->find($id);

		if (is_null($utilisateur)) {
			 throw $this->createNotFoundException('L\'utilisateur n\'existe pas');
		}

		$em->remove($utilisateur);
		$em->flush();

		return $this->redirectToRoute('bw_admin_homepage');
    }

    public function tableauUtilisateurAction(){
		$em = $this->getDoctrine()->getManager();
		$utilisateurRepository = $em->getRepository('BWUtilisateurBundle:Utilisateur');


		$tabUtilisateur = $utilisateurRepository->findAll();
        return $this->render('BWUtilisateurBundle:Admin:tableauUtilisateur.html.twig', array('tabUti' => $tabUtilisateur));
    }
}
