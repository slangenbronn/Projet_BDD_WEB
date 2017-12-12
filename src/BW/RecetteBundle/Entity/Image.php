<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image", uniqueConstraints={@ORM\UniqueConstraint(name="idimage_2", columns={"idimage"}), @ORM\UniqueConstraint(name="idimage_3", columns={"idimage"})}, indexes={@ORM\Index(name="FK_image_idrecette", columns={"idrecette"}), @ORM\Index(name="idimage", columns={"idimage"})})
 * @ORM\Entity
 */
class Image
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimage", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimage;

    /**
     * @var string
     *
     * @ORM\Column(name="lieni", type="string", length=250, nullable=true)
     */
    private $lieni;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="integer", nullable=true)
     */
    private $idrecette;



    /**
     * Get idimage
     *
     * @return integer
     */
    public function getIdimage()
    {
        return $this->idimage;
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

    /**
     * Set idrecette
     *
     * @param integer $idrecette
     *
     * @return Image
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
