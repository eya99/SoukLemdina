<?php

namespace LocalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likes
 *
 * @ORM\Table(name="likes")
 * @ORM\Entity(repositoryClass="LocalBundle\Repository\LikesRepository")
 */
class Likes
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
     * @var int
     * @ORM\ManyToOne(targetEntity="SUserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Local")
     * @ORM\JoinColumn(name="id_local",referencedColumnName="id" )
     */
    private $idLocal;


    /**
     * Get id
     *
     * @return integer
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
     * @return Likes
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idLocal
     *
     * @param integer $idLocal
     *
     * @return Likes
     */
    public function setIdLocal($idLocal)
    {
        $this->idLocal = $idLocal;
    
        return $this;
    }

    /**
     * Get idLocal
     *
     * @return integer
     */
    public function getIdLocal()
    {
        return $this->idLocal;
    }
}

