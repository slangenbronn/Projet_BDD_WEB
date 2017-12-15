<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\RecetteRepository")
 */
class Recette
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
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=250)
     */
    private $difficulte;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="nombrepersonne", type="integer")
     */
    private $nombrepersonne;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="calories", type="integer", nullable=true)
     */
    private $calories;

    /**
     * @var int
     *
     * @ORM\Column(name="glucide", type="integer", nullable=true)
     */
    private $glucide;

    /**
     * @var int
     *
     * @ORM\Column(name="lipide", type="integer", nullable=true)
     */
    private $lipide;

    /**
     * @var int
     *
     * @ORM\Column(name="proteines", type="integer", nullable=true)
     */
    private $proteines;

    /**
     * @var int
     *
     * @ORM\Column(name="selmineraux", type="integer", nullable=true)
     */
    private $selmineraux;

    /**
     * @ORM\ManyToOne(targetEntity="BW\UtilisateurBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;


    /**
     * @ORM\OneToMany(targetEntity="BW\RecetteBundle\Entity\Image", mappedBy="recette")
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="BW\RecetteBundle\Entity\Quantite", mappedBy="recette")
     */
    private $quantites;

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
     * @return int
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
     * @return int
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
     * @return int
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
     * @return int
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
     * @return int
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
     * @return int
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
     * @return int
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
     * @return int
     */
    public function getSelmineraux()
    {
        return $this->selmineraux;
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

    public function addImage(Image $image)
    {
        $this->images[] = $image;

        $image->setAdvert($this);

        return $this;
    }

    public function removeImage(Image $image)
    {
        $this->images->removeElement($image);
    }

    public function getImages()
    {
        return $this->images;
    }

    public function addQuantite(Quantite $quantite)
    {
        $this->quantites[] = $quantite;

        $quantite->setAdvert($this);

        return $this;
    }

    public function removeQuantite(Quantite $quantite)
    {
        $this->quantites->removeElement($quantite);
    }

    public function getQuantites()
    {
        return $this->quantites;
    }
}

