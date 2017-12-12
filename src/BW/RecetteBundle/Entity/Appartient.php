<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartient
 *
 * @ORM\Table(name="appartient", indexes={@ORM\Index(name="FK_appartient_idcat", columns={"idcat"})})
 * @ORM\Entity
 */
class Appartient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idingredient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idingredient;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcat;



    /**
     * Set idingredient
     *
     * @param integer $idingredient
     *
     * @return Appartient
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
     * Set idcat
     *
     * @param integer $idcat
     *
     * @return Appartient
     */
    public function setIdcat($idcat)
    {
        $this->idcat = $idcat;

        return $this;
    }

    /**
     * Get idcat
     *
     * @return integer
     */
    public function getIdcat()
    {
        return $this->idcat;
    }
}
