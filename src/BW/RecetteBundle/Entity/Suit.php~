<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suit
 *
 * @ORM\Table(name="suit", indexes={@ORM\Index(name="FK_suit_login", columns={"login"})})
 * @ORM\Entity
 */
class Suit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idregime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idregime;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $login;



    /**
     * Set idregime
     *
     * @param integer $idregime
     *
     * @return Suit
     */
    public function setIdregime($idregime)
    {
        $this->idregime = $idregime;

        return $this;
    }

    /**
     * Get idregime
     *
     * @return integer
     */
    public function getIdregime()
    {
        return $this->idregime;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Suit
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
