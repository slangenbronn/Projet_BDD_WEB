<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient", uniqueConstraints={@ORM\UniqueConstraint(name="idingredient_2", columns={"idingredient"}), @ORM\UniqueConstraint(name="idingredient_3", columns={"idingredient"})}, indexes={@ORM\Index(name="FK_ingredient_login", columns={"login"}), @ORM\Index(name="idingredient", columns={"idingredient"})})
 * @ORM\Entity
 */
class Ingredient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idingredient", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idingredient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomi", type="string", length=20, nullable=true)
     */
    private $nomi;

    /**
     * @var integer
     *
     * @ORM\Column(name="dispodefaut", type="integer", nullable=true)
     */
    private $dispodefaut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="typemesure", type="string", length=10, nullable=false)
     */
    private $typemesure;

    /**
     * @var integer
     *
     * @ORM\Column(name="popularite", type="integer", nullable=true)
     */
    private $popularite;

    /**
     * @var integer
     *
     * @ORM\Column(name="sansgluten", type="integer", nullable=true)
     */
    private $sansgluten = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="vegetarienne", type="integer", nullable=true)
     */
    private $vegetarienne = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pescetarien", type="integer", nullable=true)
     */
    private $pescetarien = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25, nullable=true)
     */
    private $login;



    /**
     * Get idingredient
     *
     * @return integer
     */
    public function getIdingredient()
    {
        return $this->idingredient;
    }

    /**
     * Set nomi
     *
     * @param string $nomi
     *
     * @return Ingredient
     */
    public function setNomi($nomi)
    {
        $this->nomi = $nomi;

        return $this;
    }

    /**
     * Get nomi
     *
     * @return string
     */
    public function getNomi()
    {
        return $this->nomi;
    }

    /**
     * Set dispodefaut
     *
     * @param integer $dispodefaut
     *
     * @return Ingredient
     */
    public function setDispodefaut($dispodefaut)
    {
        $this->dispodefaut = $dispodefaut;

        return $this;
    }

    /**
     * Get dispodefaut
     *
     * @return integer
     */
    public function getDispodefaut()
    {
        return $this->dispodefaut;
    }

    /**
     * Set typemesure
     *
     * @param string $typemesure
     *
     * @return Ingredient
     */
    public function setTypemesure($typemesure)
    {
        $this->typemesure = $typemesure;

        return $this;
    }

    /**
     * Get typemesure
     *
     * @return string
     */
    public function getTypemesure()
    {
        return $this->typemesure;
    }

    /**
     * Set popularite
     *
     * @param integer $popularite
     *
     * @return Ingredient
     */
    public function setPopularite($popularite)
    {
        $this->popularite = $popularite;

        return $this;
    }

    /**
     * Get popularite
     *
     * @return integer
     */
    public function getPopularite()
    {
        return $this->popularite;
    }

    /**
     * Set sansgluten
     *
     * @param integer $sansgluten
     *
     * @return Ingredient
     */
    public function setSansgluten($sansgluten)
    {
        $this->sansgluten = $sansgluten;

        return $this;
    }

    /**
     * Get sansgluten
     *
     * @return integer
     */
    public function getSansgluten()
    {
        return $this->sansgluten;
    }

    /**
     * Set vegetarienne
     *
     * @param integer $vegetarienne
     *
     * @return Ingredient
     */
    public function setVegetarienne($vegetarienne)
    {
        $this->vegetarienne = $vegetarienne;

        return $this;
    }

    /**
     * Get vegetarienne
     *
     * @return integer
     */
    public function getVegetarienne()
    {
        return $this->vegetarienne;
    }

    /**
     * Set pescetarien
     *
     * @param integer $pescetarien
     *
     * @return Ingredient
     */
    public function setPescetarien($pescetarien)
    {
        $this->pescetarien = $pescetarien;

        return $this;
    }

    /**
     * Get pescetarien
     *
     * @return integer
     */
    public function getPescetarien()
    {
        return $this->pescetarien;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Ingredient
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
