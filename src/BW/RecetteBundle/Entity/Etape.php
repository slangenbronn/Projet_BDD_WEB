<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 *
 * @ORM\Table(name="etape")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\EtapeRepository")
 */
class Etape
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
     * @ORM\Column(name="descriptione", type="string", length=250)
     */
    private $descriptione;

    /**
     * @var float
     *
     * @ORM\Column(name="dureee", type="float", nullable=true)
     */
    private $dureee;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Recette")
     * @ORM\JoinColumn(nullable=true)
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
     * Set descriptione
     *
     * @param string $descriptione
     *
     * @return Etape
     */
    public function setDescriptione($descriptione)
    {
        $this->descriptione = $descriptione;

        return $this;
    }

    /**
     * Get descriptione
     *
     * @return string
     */
    public function getDescriptione()
    {
        return $this->descriptione;
    }

    /**
     * Set dureee
     *
     * @param float $dureee
     *
     * @return Etape
     */
    public function setDureee($dureee)
    {
        $this->dureee = $dureee;

        return $this;
    }

    /**
     * Get dureee
     *
     * @return float
     */
    public function getDureee()
    {
        return $this->dureee;
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

