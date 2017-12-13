<?php

namespace BW\RecetteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BW\RecetteBundle\Entity\Recette;
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

    return $this->render('BWRecetteBundle:Recette:ListeRecette.html.twig', array(
      'recette' => $recette,
      'image' => $liste_i,
      'count' => $count));
  }

  public function detailAction($idRecette)
  {
    $Recetterepository = $this->getDoctrine()
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

    $liste_ing = $Ingredientrepository->findBy(array('idingredient' => $liste_id));

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
    // On crée un objet Advert
   $recette = new Recette();

   // On crée le FormBuilder grâce au service form factory

   // On ajoute les champs de l'entité que l'on veut à notre formulaire
   $form = $this->get('form.factory')->createBuilder(FormType::class, $recette)
     ->add('nom',      TextType::class)
     ->add('description',     TextareaType::class)
     ->add('nombrepersonne',   NumberType::class)
     ->add('duree',    NumberType::class)
     ->add('difficulte', ChoiceType::class,array('choices' => array(
                    '' => null,
                    'Très facile' => 'Très facile',
                    'Facile' => 'Facile',
                    'Moyen' => 'Moyen',
                    'Difficile' => 'Difficile',
                ),
              ))
     ->add('prix',    NumberType::class)
     ->add('save',      SubmitType::class)
     ->getForm()
   ;
   // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
   if($request->isMethod('POST')){
     $form->handleRequest($request);
     if ($form->isValid()) {
        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($recette);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Recette bien enregistrée.');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirectToRoute('bw_recette_homepage');
      }
   }

   // On passe la méthode createView() du formulaire à la vue
   // afin qu'elle puisse afficher le formulaire toute seule
   return $this->render('BWRecetteBundle:Recette:CreerRecette.html.twig', array(
     'form' => $form->createView(),
   ));
  }
}

 ?>
