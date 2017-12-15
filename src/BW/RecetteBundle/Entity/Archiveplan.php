<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archiveplan
 *
 * @ORM\Table(name="archiveplan")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\ArchiveplanRepository")
 */
class Archiveplan
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
     * @ORM\Column(name="dateap", type="date", nullable=true)
     */
    private $dateap;


    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Recette")
     * @ORM\JoinColumn(nullable=true)
     */
    private $recette;

    /**
     * @ORM\ManyToOne(targetEntity="BW\UtilisateurBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

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
     * Set dateap
     *
     * @param \DateTime $dateap
     *
     * @return Archiveplan
     */
    public function setDateap($dateap)
    {
        $this->dateap = $dateap;

        return $this;
    }

    /**
     * Get dateap
     *
     * @return \DateTime
     */
    public function getDateap()
    {
        return $this->dateap;
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

    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}

