<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archiveachat
 *
 * @ORM\Table(name="archiveachat")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\ArchiveachatRepository")
 */
class Archiveachat
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
     * @var \DateTime
     *
     * @ORM\Column(name="datea", type="date", nullable=true)
     */
    private $datea;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Archiveplan")
     * @ORM\JoinColumn(nullable=false)
     */
    private $archiveplan;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Ingredient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ingredient;

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

    public function getArchiveplan()
    {
        return $this->archiveplan;
    }

    public function setArchiveplan(Archiveplan $archiveplan)
    {
        $this->archiveplan = $archiveplan;

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
}

