<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suit
 *
 * @ORM\Table(name="suit")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\SuitRepository")
 */
class Suit
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
     * @ORM\ManyToOne(targetEntity="BW\UtilisateurBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Regime")
     * @ORM\JoinColumn(nullable=false)
     */
    private $regime;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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

    public function getRegime()
    {
        return $this->regime;
    }

    public function setRegime(Regime $regime)
    {
        $this->Regime = $regime;

        return $this;
    }
}

