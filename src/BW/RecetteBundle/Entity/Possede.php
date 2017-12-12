<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Possede
 *
 * @ORM\Table(name="possede", indexes={@ORM\Index(name="FK_possede_idingredient", columns={"idingredient"})})
 * @ORM\Entity
 */
class Possede
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $login;

    /**
     * @var integer
     *
     * @ORM\Column(name="idingredient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idingredient;



    /**
     * Set login
     *
     * @param string $login
     *
     * @return Possede
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
     * Set idingredient
     *
     * @param integer $idingredient
     *
     * @return Possede
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
}
