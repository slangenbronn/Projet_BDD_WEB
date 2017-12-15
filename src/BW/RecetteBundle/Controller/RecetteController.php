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

    /*$Imagerepository = $this->getDoctrine()
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

    $count = count($recette);*/

    return $this->render('BWRecetteBundle:Recette:ListeRecette.html.twig', array(
      'listeRecette' => $listeRecette));
  }

  public function detailAction($idRecette)
  {
    /*$Recetterepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Recette')
    ;

    $Etaperepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Etape')
    ;

    $Quantiterepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Quantite')
    ;

    $Ingredientrepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Ingredient')
    ;

    $Imagerepository = $this->getDoctrine()
      ->getRepository('BWRecetteBundle:Image')
    ;

    $Utilisateurrepositor = $this->getDoctrine()
      ->getRepository('BWUtilisateurBundle:Utilisateur')
    ;

    $liste_id = array();
    $recette = $Recetterepository->find($idRecette);
    $etape = $Etaperepository->findBy(array('idrecette' => $idRecette));
    $quantite = $Quantiterepository->findBy(array('idrecette' => $idRecette));
    $image = $Imagerepository->findOneBy(array('idrecette' => $idRecette));
    $user = $Utilisateurrepositor->findOneBy(array('id' => $recette->getId()));

    foreach($quantite as $l){
      $liste_id[] = $l->getIdingredient();
    }

    $count = count($liste_id);

    $liste_ing = $Ingredientrepository->findBy(array('idingredient' => $liste_id));*/

    return $this->render('BWRecetteBundle:Recette:Recette.html.twig', array(
      'recette' => $recette,
      'etape' => $etape,
      'quantite' => $quantite,
      'l_ing' => $liste_ing,
      'count' => $count,
      'image' => $image,
      'user' => $user));
  }

  public function creerAction(Request $request)
  {
   $recette = new Recette();

   // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
   if($request->isMethod('POST')){

    $nom = $request->request->get('_name');
    $description = $request->request->get('_desc');
		$nombrepersonnes = $request->request->get('_nbpers');
		$duree = $request->request->get('_duree');
		$difficulte = $request->request->get('_form');
    $prix = $request->request->get('_prix');


        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $RecetteRepository = $em->getRepository('BWRecetteBundle:Recette');
        $recette = new Recette();
        $recette->setNom($nom);
        $recette->setDescription($description);
        $recette->setDuree($duree);
        $recette->setNombrepersonne($nombrepersonnes);
        $recette->setDifficulte($difficulte);
        $recette->setPrix($prix);
        $em->persist($recette);
        $em->flush();


        $ImageRepository = $em->getRepository('BWRecetteBundle:Image');
        $image = new Image();
        $idrecette = $RecetteRepository->findOneBy(array('nom' => $nom));
        //$image->setRecette($idrecette->getIdrecette());
        $image->setRecette($recette);
        $image->setLieni("Image/default-placeholder.png"); //Image par défaut
        $em->persist($image);

        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Recette bien enregistrée.');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirectToRoute('bw_recette_homepage');
   }

   return $this->render('BWRecetteBundle:Recette:CreerRecette.html.twig');
  }
}

 ?>
