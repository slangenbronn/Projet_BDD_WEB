<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archiveachat
 *
 * @ORM\Table(name="archiveachat", uniqueConstraints={@ORM\UniqueConstraint(name="idarchivplan", columns={"idarchivplan"})}, indexes={@ORM\Index(name="FK_archiveachat_idingredient", columns={"idingredient"})})
 * @ORM\Entity
 */
class Archiveachat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idarchivplan", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idarchivplan;

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
     * @ORM\Column(name="datea", type="date", nullable=true)
     */
    private $datea;



    /**
     * Set idarchivplan
     *
     * @param integer $idarchivplan
     *
     * @return Archiveachat
     */
    public function setIdarchivplan($idarchivplan)
    {
        $this->idarchivplan = $idarchivplan;

        return $this;
    }

    /**
     * Get idarchivplan
     *
     * @return integer
     */
    public function getIdarchivplan()
    {
        return $this->idarchivplan;
    }

    /**
     * Set idingredient
     *
     * @param integer $idingredient
     *
     * @return Archiveachat
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
     * Set datea
     *
     * @param \DateTime $datea
     *
     * @return Archiveachat
     */
    public function setDatea($datea)
    {
        $this->datea = $datea;

        return $this;
    }

    /**
     * Get datea
     *
     * @return \DateTime
     */
    public function getDatea()
    {
        return $this->datea;
    }
}
