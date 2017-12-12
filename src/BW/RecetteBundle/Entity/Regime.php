<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regime
 *
 * @ORM\Table(name="regime", uniqueConstraints={@ORM\UniqueConstraint(name="nomr", columns={"nomr"}), @ORM\UniqueConstraint(name="idregime_2", columns={"idregime"})}, indexes={@ORM\Index(name="idregime", columns={"idregime"})})
 * @ORM\Entity
 */
class Regime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idregime", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregime;

    /**
     * @var string
     *
     * @ORM\Column(name="nomr", type="string", length=25, nullable=false)
     */
    private $nomr;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionr", type="string", length=250, nullable=true)
     */
    private $descriptionr;



    /**
     * Get idregime
     *
     * @return integer
     */
    public function getIdregime()
    {
        return $this->idregime;
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
}
