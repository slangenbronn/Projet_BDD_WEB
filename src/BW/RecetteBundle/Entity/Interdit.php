<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interdit
 *
 * @ORM\Table(name="interdit", indexes={@ORM\Index(name="FK_interdit_idrecette", columns={"idrecette"})})
 * @ORM\Entity
 */
class Interdit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idregime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idregime;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idrecette;



    /**
     * Set idregime
     *
     * @param integer $idregime
     *
     * @return Interdit
     */
    public function setIdregime($idregime)
    {
        $this->idregime = $idregime;

        return $this;
    }

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
     * Set idrecette
     *
     * @param integer $idrecette
     *
     * @return Interdit
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
