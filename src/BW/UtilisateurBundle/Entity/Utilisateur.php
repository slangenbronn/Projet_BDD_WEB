<?php

namespace BW\UtilisateurBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
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
}