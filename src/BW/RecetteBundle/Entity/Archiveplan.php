<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archiveplan
 *
 * @ORM\Table(name="archiveplan", uniqueConstraints={@ORM\UniqueConstraint(name="idarchivplan", columns={"idarchivplan"})}, indexes={@ORM\Index(name="FK_archivplan_login", columns={"login"}), @ORM\Index(name="FK_archivplan_idrecette", columns={"idrecette"})})
 * @ORM\Entity
 */
class Archiveplan
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idarchivplan", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarchivplan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateap", type="date", nullable=true)
     */
    private $dateap;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="integer", nullable=true)
     */
    private $idrecette;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25, nullable=true)
     */
    private $login;



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

    /**
     * Set idrecette
     *
     * @param integer $idrecette
     *
     * @return Archiveplan
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

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Archiveplan
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
}
