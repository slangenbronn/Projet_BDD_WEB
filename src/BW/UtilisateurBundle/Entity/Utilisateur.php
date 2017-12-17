<?php

namespace BW\UtilisateurBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use BW\RecetteBundle\Entity\Ingredient;
/**
 * @ORM\Entity(repositoryClass="BW\UtilisateurBundle\Repository\UtilisateurRepository")
 * @ORM\Table(name="Utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $prenom;

    /**
     * @ORM\ManyToMany(targetEntity="BW\RecetteBundle\Entity\Ingredient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ingredient;

    public function __construct()
    {
        parent::__construct();
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($content){
        $this->nom = $content;

        return $this;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($content){
        $this->prenom = $content;

        return $this;
    }

    public function getIngredient()
    {
        return $this->ingredient;
    }

    public function setIngredient(Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }
}