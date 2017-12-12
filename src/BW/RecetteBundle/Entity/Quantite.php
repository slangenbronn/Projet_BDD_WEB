<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quantite
 *
 * @ORM\Table(name="quantite", indexes={@ORM\Index(name="FK_quantite_idingredient", columns={"idingredient"})})
 * @ORM\Entity
 */
class Quantite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idrecette;

    /**
     * @var integer
     *
     * @ORM\Column(name="idingredient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idingredient;

    /**
     * @var float
     *
     * @ORM\Column(name="quantiteing", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantiteing;

    /**
     * @var integer
     *
     * @ORM\Column(name="calories", type="integer", nullable=true)
     */
    private $calories;



    /**
     * Set idrecette
     *
     * @param integer $idrecette
     *
     * @return Quantite
     */
    public function setIdrecette($idrecette)
    {
        $this->idrecette = $idrecette;

        return $this;
    }

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
     * Set idingredient
     *
     * @param integer $idingredient
     *
     * @return Quantite
     */
    public function setIdingredient($idingredient)
    {
        $this->idingredient = $idingredient;

        return $this;
    }

    /**
     * Get idingredient
     *
     * @return integer
     */
    public function getIdingredient()
    {
        return $this->idingredient;
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
     * @return integer
     */
    public function getCalories()
    {
        return $this->calories;
    }
}
