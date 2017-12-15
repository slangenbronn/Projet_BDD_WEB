<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="achat")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\AchatRepository")
 */
class Achat
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
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Planning")
     * @ORM\JoinColumn(nullable=false)
     */
    private $planning;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Ingredient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ingredient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateb", type="date", nullable=true)
     */
    private $dateb;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getPlanning()
    {
        return $this->planning;
    }

    public function setPlanning(Planning $planning)
    {
        $this->planning = $planning;

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

    /**
     * Set dateb
     *
     * @param \DateTime $dateb
     *
     * @return Achat
     */
    public function setDateb($dateb)
    {
        $this->dateb = $dateb;

        return $this;
    }

    /**
     * Get dateb
     *
     * @return \DateTime
     */
    public function getDateb()
    {
        return $this->dateb;
    }
}

