<?php

namespace SocialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Follow
 *
 * @ORM\Table(name="follow")
 * @ORM\Entity(repositoryClass="SocialBundle\Repository\FollowRepository")
 */
class Follow
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
     * @ORM\ManyToOne(targetEntity="SocialBundle\Entity\Profile")
     * @ORM\JoinColumn(name="id_profile_follower",referencedColumnName="id")
     */
    private $idProfileFollower;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="SocialBundle\Entity\Profile")
     * @ORM\JoinColumn(name="id_profile_followed",referencedColumnName="id")
     */
    private $idProfileFollowed;

    /**
     * @return int
     */
    public function getIdProfileFollowed()
    {
        return $this->idProfileFollowed;
    }

    /**
     * @param int $idProfileFollowed
     */
    public function setIdProfileFollowed($idProfileFollowed)
    {
        $this->idProfileFollowed = $idProfileFollowed;
    }

    /**
     * @return int
     */
    public function getIdProfileFollower()
    {
        return $this->idProfileFollower;
    }

    /**
     * @param int $idProfileFollower
     */
    public function setIdProfileFollower($idProfileFollower)
    {
        $this->idProfileFollower = $idProfileFollower;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}
