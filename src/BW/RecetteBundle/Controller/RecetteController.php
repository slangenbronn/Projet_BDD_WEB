<?php

namespace BW\RecetteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BW\RecetteBundle\Entity\Recette;
use BW\RecetteBundle\Entity\Image;
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

  public function creerIngredientAction()
  {
    return $this->render('BWRecetteBundle:Recette:creerIngredient.html.twig');
  }

  public function creationIngredientAction(Request $request)
  {
    $idUtilisateur = $request->query->get('id');
    $nomi = $request->request->get('_name');
    $
    return $this->render('BWRecetteBundle:Recette:creerIngredient.html.twig');
    //return $this->redirectToRoute('bw_recette_homepage');
  }
}
