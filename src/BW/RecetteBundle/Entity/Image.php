<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\ImageRepository")
 */
class Image
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
     * @ORM\Column(name="lieni", type="string", length=250, nullable=true)
     */
    private $lieni;

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
     * Set lieni
     *
     * @param string $lieni
     *
     * @return Image
     */
    public function setLieni($lieni)
    {
        $this->lieni = $lieni;

        return $this;
    }

    /**
     * Get lieni
     *
     * @return string
     */
    public function getLieni()
    {
        return $this->lieni;
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

