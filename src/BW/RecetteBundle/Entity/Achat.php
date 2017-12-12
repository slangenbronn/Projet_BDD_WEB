<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="achat", uniqueConstraints={@ORM\UniqueConstraint(name="idplan_2", columns={"idplan"}), @ORM\UniqueConstraint(name="idplan_3", columns={"idplan"})}, indexes={@ORM\Index(name="FK_achat_idingredient", columns={"idingredient"}), @ORM\Index(name="idplan", columns={"idplan"})})
 * @ORM\Entity
 */
class Achat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idplan", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idplan;

    /**
     * @var integer
     *
     * @ORM\Column(name="idingredient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idingredient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateb", type="date", nullable=true)
     */
    private $dateb;



    /**
     * Set idplan
     *
     * @param integer $idplan
     *
     * @return Achat
     */
    public function setIdplan($idplan)
    {
        $this->idplan = $idplan;

        return $this;
    }

    /**
     * Get idplan
     *
     * @return integer
     */
    public function getIdplan()
    {
        return $this->idplan;
    }

    /**
     * Set idingredient
     *
     * @param integer $idingredient
     *
     * @return Achat
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
