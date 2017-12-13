<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette", uniqueConstraints={@ORM\UniqueConstraint(name="idrecette", columns={"idrecette"}), @ORM\UniqueConstraint(name="idrecette_3", columns={"idrecette"})}, indexes={@ORM\Index(name="FK_recette_id", columns={"id"}), @ORM\Index(name="idrecette_2", columns={"idrecette"})})
 * @ORM\Entity
 */
class Recette
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecette;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=25, nullable=false)
     */
    private $difficulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombrepersonne", type="integer", nullable=false)
     */
    private $nombrepersonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="calories", type="integer", nullable=true)
     */
    private $calories;

    /**
     * @var integer
     *
     * @ORM\Column(name="glucide", type="integer", nullable=true)
     */
    private $glucide;

    /**
     * @var integer
     *
     * @ORM\Column(name="lipide", type="integer", nullable=true)
     */
    private $lipide;

    /**
     * @var integer
     *
     * @ORM\Column(name="proteines", type="integer", nullable=true)
     */
    private $proteines;

    /**
     * @var integer
     *
     * @ORM\Column(name="selmineraux", type="integer", nullable=true)
     */
    private $selmineraux;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;



    /**
     * Get idrecette
     *
     * @return integer
     */
    public function getIdrecette()
    {
        return $this->idrecette;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recette
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     *
     * @return Recette
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Recette
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nombrepersonne
     *
     * @param integer $nombrepersonne
     *
     * @return Recette
     */
    public function setNombrepersonne($nombrepersonne)
    {
        $this->nombrepersonne = $nombrepersonne;

        return $this;
    }

    /**
     * Get nombrepersonne
     *
     * @return integer
     */
    public function getNombrepersonne()
    {
        return $this->nombrepersonne;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Recette
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Recette
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set calories
     *
     * @param integer $calories
     *
     * @return Recette
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return integer
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set glucide
     *
     * @param integer $glucide
     *
     * @return Recette
     */
    public function setGlucide($glucide)
    {
        $this->glucide = $glucide;

        return $this;
    }

    /**
     * Get glucide
     *
     * @return integer
     */
    public function getGlucide()
    {
        return $this->glucide;
    }

    /**
     * Set lipide
     *
     * @param integer $lipide
     *
     * @return Recette
     */
    public function setLipide($lipide)
    {
        $this->lipide = $lipide;

        return $this;
    }

    /**
     * Get lipide
     *
     * @return integer
     */
    public function getLipide()
    {
        return $this->lipide;
    }

    /**
     * Set proteines
     *
     * @param integer $proteines
     *
     * @return Recette
     */
    public function setProteines($proteines)
    {
        $this->proteines = $proteines;

        return $this;
    }

    /**
     * Get proteines
     *
     * @return integer
     */
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * Set selmineraux
     *
     * @param integer $selmineraux
     *
     * @return Recette
     */
    public function setSelmineraux($selmineraux)
    {
        $this->selmineraux = $selmineraux;

        return $this;
    }

    /**
     * Get selmineraux
     *
     * @return integer
     */
    public function getSelmineraux()
    {
        return $this->selmineraux;
    }

    /**
     * Set Id
     *
     * @param integer $id
     *
     * @return Recette
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
