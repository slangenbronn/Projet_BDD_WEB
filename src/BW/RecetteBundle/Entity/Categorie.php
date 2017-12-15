<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="nomc", type="string", length=25)
     */
    private $nomc;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionc", type="string", length=250, nullable=true)
     */
    private $descriptionc;


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
     * Set nomc
     *
     * @param string $nomc
     *
     * @return Categorie
     */
    public function setNomc($nomc)
    {
        $this->nomc = $nomc;

        return $this;
    }

    /**
     * Get nomc
     *
     * @return string
     */
    public function getNomc()
    {
        return $this->nomc;
    }

    /**
     * Set descriptionc
     *
     * @param string $descriptionc
     *
     * @return Categorie
     */
    public function setDescriptionc($descriptionc)
    {
        $this->descriptionc = $descriptionc;

        return $this;
    }

    /**
     * Get descriptionc
     *
     * @return string
     */
    public function getDescriptionc()
    {
        return $this->descriptionc;
    }
}

