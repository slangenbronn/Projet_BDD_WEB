<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video", uniqueConstraints={@ORM\UniqueConstraint(name="idvideo_2", columns={"idvideo"})}, indexes={@ORM\Index(name="FK_video_idrecette", columns={"idrecette"}), @ORM\Index(name="idvideo", columns={"idvideo"})})
 * @ORM\Entity
 */
class Video
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvideo", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvideo;

    /**
     * @var string
     *
     * @ORM\Column(name="lienv", type="string", length=250, nullable=true)
     */
    private $lienv;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecette", type="integer", nullable=true)
     */
    private $idrecette;



    /**
     * Get idvideo
     *
     * @return integer
     */
    public function getIdvideo()
    {
        return $this->idvideo;
    }

    /**
     * Set lienv
     *
     * @param string $lienv
     *
     * @return Video
     */
    public function setLienv($lienv)
    {
        $this->lienv = $lienv;

        return $this;
    }

    /**
     * Get lienv
     *
     * @return string
     */
    public function getLienv()
    {
        return $this->lienv;
    }

    /**
     * Set idrecette
     *
     * @param integer $idrecette
     *
     * @return Video
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
