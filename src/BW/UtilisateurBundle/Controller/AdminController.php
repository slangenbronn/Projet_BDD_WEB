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

    public function tableauRecetteAction(){
		$em = $this->getDoctrine()->getManager();
		$recetteRepository = $em->getRepository('BWRecetteBundle:Recette');


		$tabRecette = $recetteRepository->findAll();
        return $this->render('BWUtilisateurBundle:Admin:tableauRecette.html.twig', array('tabRecette' => $tabRecette));
    }

    public function suppressionRecetteAction(Request $request){
    	$id = $request->query->get('id');

    	$em = $this->getDoctrine()->getManager();
		$recetteRepository = $em->getRepository('BWRecetteBundle:Recette');
		$recette = $recetteRepository->find($id);

		if (is_null($recette)) {
			 throw $this->createNotFoundException('La recette n\'existe pas');
		}
		// Supprime les entités liés
		$imageRepository = $em->getRepository('BWRecetteBundle:Image');
		$images = $imageRepository->findByRecette($recette);
		foreach ($images as $image) {
			$em->remove($image);
		}

		$videoRepository = $em->getRepository('BWRecetteBundle:Video');
		$videos = $videoRepository->findByRecette($recette);
		foreach ($videos as $video) {
			$em->remove($video);
		}

		$quantiteRepository = $em->getRepository('BWRecetteBundle:Quantite');
		$quantites = $quantiteRepository->findByRecette($recette);
		foreach ($quantites as $quantite) {
			$em->remove($quantite);
		}


		$em->remove($recette);
		$em->flush();

		return $this->redirectToRoute('bw_admin_homepage');
    }

    public function tableauIngredientAction(){
		$em = $this->getDoctrine()->getManager();
		$ingredientRepository = $em->getRepository('BWRecetteBundle:Ingredient');


		$tabIngredient = $ingredientRepository->findAll();

        return $this->render('BWUtilisateurBundle:Admin:tableauIngredient.html.twig', array('tabIngredient' => $tabIngredient));
    }

    public function suppressionIngredientAction(Request $request){
    	$id = $request->query->get('id');

    	$em = $this->getDoctrine()->getManager();
		$ingredientRepository = $em->getRepository('BWRecetteBundle:Ingredient');

		$ingredient = $ingredientRepository->find($id);

		if (is_null($ingredient)) {
			 throw $this->createNotFoundException('L\'ingrédient n\'existe pas');
		}

		// Supprime les entités liés
		$quantiteRepository = $em->getRepository('BWRecetteBundle:Quantite');
		$quantites = $quantiteRepository->findByIngredient($ingredient);
		foreach ($quantites as $quantite) {
			$em->remove($quantite);
		}

		$em->remove($ingredient);
		$em->flush();

		return $this->redirectToRoute('bw_admin_homepage');
    }
}
