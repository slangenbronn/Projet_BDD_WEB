<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quantite
 *
 * @ORM\Table(name="quantite")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\QuantiteRepository")
 */
class Quantite
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
     * @var float
     *
     * @ORM\Column(name="quantiteing", type="float", nullable=true)
     */
    private $quantiteing;

    /**
     * @var int
     *
     * @ORM\Column(name="calories", type="integer", nullable=true)
     */
    private $calories;


    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Ingredient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ingredient;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Recette")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recette;

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
     * Set quantiteing
     *
     * @param float $quantiteing
     *
     * @return Quantite
     */
    public function setQuantiteing($quantiteing)
    {
        $this->quantiteing = $quantiteing;

        return $this;
    }

    /**
     * Get quantiteing
     *
     * @return float
     */
    public function getQuantiteing()
    {
        return $this->quantiteing;
    }

    /**
     * Set calories
     *
     * @param integer $calories
     *
     * @return Quantite
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

    public function getIngredient()
    {
        return $this->ingredient;
    }

    public function setIngredient(Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    public function getRecette()
    {
        return $this->recette;
    }

    public function setRecette(Recette $recette)
    {
        $this->recette = $recette;

        return $this;
    }
}