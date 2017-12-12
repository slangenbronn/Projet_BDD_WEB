<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning", uniqueConstraints={@ORM\UniqueConstraint(name="idplan_2", columns={"idplan"}), @ORM\UniqueConstraint(name="idplan_3", columns={"idplan"})}, indexes={@ORM\Index(name="FK_planning_login", columns={"login"}), @ORM\Index(name="FK_planning_idrecette", columns={"idrecette"}), @ORM\Index(name="idplan", columns={"idplan"})})
 * @ORM\Entity
 */
class Planning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idplan", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datep", type="date", nullable=true)
     */
    private $datep;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25, nullable=true)
     */
    private $login;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="integer", nullable=true)
     */
    private $idrecette;



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
     * Set datep
     *
     * @param \DateTime $datep
     *
     * @return Planning
     */
    public function setDatep($datep)
    {
        $this->datep = $datep;

        return $this;
    }

    /**
     * Get datep
     *
     * @return \DateTime
     */
    public function getDatep()
    {
        return $this->datep;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Planning
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

    /**
     * Set idrecette
     *
     * @param integer $idrecette
     *
     * @return Planning
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
}
