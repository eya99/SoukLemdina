<?php

namespace SocialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Jaime
 * @package SocialBundle\Entity
 * @ORM\Table(name="jaime")
 * @ORM\Entity
 */
class Jaime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="SUserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="SocialBundle\Entity\Post")
     * @ORM\JoinColumn(name="id_post",referencedColumnName="id")
     */
    private $idPost;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Jaime
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Get idPost
     *
     * @return int
     */
    public function getIdPost()
    {
        return $this->idPost;
    }

}

