<?php

namespace BW\RecetteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BW\RecetteBundle\Entity\Recette;
use BW\RecetteBundle\Entity\Image;
use BW\RecetteBundle\Entity\Ingredient;
use BW\RecetteBundle\Entity\Quantite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;


class RecetteController extends Controller
{
  public function listeAction()
  {
    $recetteRepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Recette');

    $listeRecette = $recetteRepository->getListeRecette();

    return $this->render('BWRecetteBundle:Recette:ListeRecette.html.twig', array(
      'listeRecette' => $listeRecette));
  }

  public function detailAction($idRecette)
  {
    $recetteRepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Recette');

    $recette = $recetteRepository->getDetailRecette($idRecette);

    return $this->render('BWRecetteBundle:Recette:Recette.html.twig', array(
      'recette' => $recette));
  }

  public function creerRecetteAction()
  {
    $ingRepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Ingredient');

    $ingredients = $ingRepository->findAll();

    return $this->render('BWRecetteBundle:Recette:CreerRecette.html.twig',array('ingredients' =>  $ingredients));
  }

  public function creationRecetteAction(Request $request){
    $em = $this->getDoctrine()->getManager();

    /* Recette */
    $desc = $request->request->get('_desc');
    $nom = $request->request->get('_name');
    $nbPers = $request->request->get('_nbpers');
    $duree = $request->request->get('_duree');
    $prix = $request->request->get('_prix');
    $difficulte = $request->request->get('_form');

    $recette = new Recette();
    $recette->setNom($nom);
    $recette->setDescription($desc);
    $recette->setDuree($duree);
    $recette->setPrix($prix);
    $recette->setNombrepersonne($nbPers);
    $recette->setDifficulte($difficulte);
    //Ajout l'auteur
    $utiRepository = $this->getDoctrine()
      ->getRepository('BWUtilisateurBundle:Utilisateur');
    $uti = $utiRepository->findOneById($request->query->get('id'));
    $recette->setUtilisateur($uti);

    $em->persist($recette);

    /* Image */
    $image = new Image();
    $image->setRecette($recette);
    $image->setLieni("Image/default-placeholder.png");

    $em->persist($image);

    /* Quantitite */
    // Récupere tout les ids d'ingrédient dans la requête poste
    $all = $request->request->all();
    $ingredients = array_flip( preg_grep("#_ing#", array_flip($all), 0 ) );
    $ingRepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Ingredient');
    foreach ($ingredients as $ing => $quantite) {
      $idIng = substr($ing, 4);
      $ing = $ingRepository->findOneById($idIng);

      $qte = new Quantite();
      $qte->setQuantiteing($quantite);
      $qte->setRecette($recette);
      $qte->setIngredient($ing);

      $em->persist($qte);
    }

    $em->flush();

    return $this->redirectToRoute('bw_recette_homepage');
  }

  public function creerIngredientAction()
  {
    return $this->render('BWRecetteBundle:Recette:creerIngredient.html.twig');
  }

  public function creationIngredientAction(Request $request)
  {
    $idUtilisateur = $request->query->get('id');
    $nomi = $request->request->get('_name');
    $mesure = $request->request->get('_mesure');

    $ingredient = new Ingredient();

    $ingredient->setNomi($nomi);
    $ingredient->setTypemesure($mesure);

    $em = $this->getDoctrine()->getManager();

    $em->persist($ingredient);
    $em->flush();

    return $this->redirectToRoute('bw_recette_homepage');
  }
}
