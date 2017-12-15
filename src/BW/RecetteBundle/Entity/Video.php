<?php

namespace BW\RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="BW\RecetteBundle\Repository\VideoRepository")
 */
class Video
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
     * @var string
     *
     * @ORM\Column(name="lienv", type="string", length=250)
     */
    private $lienv;

    /**
     * @ORM\ManyToOne(targetEntity="BW\RecetteBundle\Entity\Recette")
     * @ORM\JoinColumn(nullable=true)
     */
    private $recette;


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

    public function getRecette()
    {
        return $this->recette;
    }

    public function setRecette(Recette $recette)
    {
        $this->recette = $recette;

        return $this;
    }
}

