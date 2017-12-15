<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\IngredientRepository")
 */
class Ingredient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomi", type="string", length=20, nullable=true)
     */
    private $nomi;

    /**
     * @var int
     *
     * @ORM\Column(name="dispodefaut", type="integer", nullable=true)
     */
    private $dispodefaut;

    /**
     * @var string
     *
     * @ORM\Column(name="typemesure", type="string", length=10)
     */
    private $typemesure;

    /**
     * @var int
     *
     * @ORM\Column(name="popularite", type="integer", nullable=true)
     */
    private $popularite;

    /**
     * @var int
     *
     * @ORM\Column(name="sansgluten", type="integer", nullable=true)
     */
    private $sansgluten;

    /**
     * @var int
     *
     * @ORM\Column(name="vegetarienne", type="integer", nullable=true)
     */
    private $vegetarienne;

    /**
     * @var int
     *
     * @ORM\Column(name="pescetarien", type="integer", nullable=true)
     */
    private $pescetarien;

    /**
     * @ORM\ManyToOne(targetEntity="BW\UtilisateurBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomi
     *
     * @param string $nomi
     *
     * @return Ingredient
     */
    public function setNomi($nomi)
    {
        $this->nomi = $nomi;

        return $this;
    }

    /**
     * Get nomi
     *
     * @return string
     */
    public function getNomi()
    {
        return $this->nomi;
    }

    /**
     * Set dispodefaut
     *
     * @param integer $dispodefaut
     *
     * @return Ingredient
     */
    public function setDispodefaut($dispodefaut)
    {
        $this->dispodefaut = $dispodefaut;

        return $this;
    }

    /**
     * Get dispodefaut
     *
     * @return int
     */
    public function getDispodefaut()
    {
        return $this->dispodefaut;
    }

    /**
     * Set typemesure
     *
     * @param string $typemesure
     *
     * @return Ingredient
     */
    public function setTypemesure($typemesure)
    {
        $this->typemesure = $typemesure;

        return $this;
    }

    /**
     * Get typemesure
     *
     * @return string
     */
    public function getTypemesure()
    {
        return $this->typemesure;
    }

    /**
     * Set popularite
     *
     * @param integer $popularite
     *
     * @return Ingredient
     */
    public function setPopularite($popularite)
    {
        $this->popularite = $popularite;

        return $this;
    }

    /**
     * Get popularite
     *
     * @return int
     */
    public function getPopularite()
    {
        return $this->popularite;
    }

    /**
     * Set sansgluten
     *
     * @param integer $sansgluten
     *
     * @return Ingredient
     */
    public function setSansgluten($sansgluten)
    {
        $this->sansgluten = $sansgluten;

        return $this;
    }

    /**
     * Get sansgluten
     *
     * @return int
     */
    public function getSansgluten()
    {
        return $this->sansgluten;
    }

    /**
     * Set vegetarienne
     *
     * @param integer $vegetarienne
     *
     * @return Ingredient
     */
    public function setVegetarienne($vegetarienne)
    {
        $this->vegetarienne = $vegetarienne;

        return $this;
    }

    /**
     * Get vegetarienne
     *
     * @return int
     */
    public function getVegetarienne()
    {
        return $this->vegetarienne;
    }

    /**
     * Set pescetarien
     *
     * @param integer $pescetarien
     *
     * @return Ingredient
     */
    public function setPescetarien($pescetarien)
    {
        $this->pescetarien = $pescetarien;

        return $this;
    }

    /**
     * Get pescetarien
     *
     * @return int
     */
    public function getPescetarien()
    {
        return $this->pescetarien;
    }

    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie(Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
}