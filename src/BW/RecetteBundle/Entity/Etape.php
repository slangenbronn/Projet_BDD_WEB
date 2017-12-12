<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 *
 * @ORM\Table(name="etape", indexes={@ORM\Index(name="FK_etape_idrecette", columns={"idrecette"}), @ORM\Index(name="idetape", columns={"idetape"})})
 * @ORM\Entity
 */
class Etape
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idetape", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idetape;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptione", type="string", length=250, nullable=false)
     */
    private $descriptione;

    /**
     * @var float
     *
     * @ORM\Column(name="dureee", type="float", precision=10, scale=0, nullable=true)
     */
    private $dureee = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="integer", nullable=true)
     */
    private $idrecette;



    /**
     * Get idetape
     *
     * @return integer
     */
    public function getIdetape()
    {
        return $this->idetape;
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

    /**
     * Set idrecette
     *
     * @param integer $idrecette
     *
     * @return Etape
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
}
