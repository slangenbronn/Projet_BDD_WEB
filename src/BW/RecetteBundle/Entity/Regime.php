<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regime
 *
 * @ORM\Table(name="regime")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\RegimeRepository")
 */
class Regime
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
     * @ORM\Column(name="nomr", type="string", length=25)
     */
    private $nomr;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionr", type="string", length=250, nullable=true)
     */
    private $descriptionr;

    /**
     * @ORM\ManyToMany(targetEntity="BW\RecetteBundle\Entity\Recette", cascade={"persist"})
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
     * Set nomr
     *
     * @param string $nomr
     *
     * @return Regime
     */
    public function setNomr($nomr)
    {
        $this->nomr = $nomr;

        return $this;
    }

    /**
     * Get nomr
     *
     * @return string
     */
    public function getNomr()
    {
        return $this->nomr;
    }

    /**
     * Set descriptionr
     *
     * @param string $descriptionr
     *
     * @return Regime
     */
    public function setDescriptionr($descriptionr)
    {
        $this->descriptionr = $descriptionr;

        return $this;
    }

    /**
     * Get descriptionr
     *
     * @return string
     */
    public function getDescriptionr()
    {
        return $this->descriptionr;
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