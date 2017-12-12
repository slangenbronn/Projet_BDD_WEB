<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", uniqueConstraints={@ORM\UniqueConstraint(name="nomc", columns={"nomc"}), @ORM\UniqueConstraint(name="idcat_2", columns={"idcat"}), @ORM\UniqueConstraint(name="IndexCat", columns={"idcat"}), @ORM\UniqueConstraint(name="idcat_3", columns={"idcat"})}, indexes={@ORM\Index(name="idcat", columns={"idcat"})})
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcat", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomc", type="string", length=25, nullable=false)
     */
    private $nomc;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionc", type="string", length=250, nullable=true)
     */
    private $descriptionc;



    /**
     * Get idcat
     *
     * @return integer
     */
    public function getIdcat()
    {
        return $this->idcat;
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
