<?php

namespace SocialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Post
 * @package SocialBundle\Entity
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post
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
     * @ORM\OneToOne(targetEntity="SUserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var
     *
     * @ORM\Column(name="texte", type="string", length=255, nullable=true)
     */
    private $texte;

    /**
     * @var
     *
     * @ORM\Column(name="pic_link", type="string", length=255, nullable=true)
     */
    private $picLink;

    /**
     * @var
     *
     * @ORM\Column(name="nb_signal", type="integer")
     */
    private $nbSignal;


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
     * @return Post
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Post
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set picLink
     *
     * @param string $picLink
     *
     * @return Post
     */
    public function setPicLink($picLink)
    {
        $this->picLink = $picLink;

        return $this;
    }

    /**
     * Get picLink
     *
     * @return string
     */
    public function getPicLink()
    {
        return $this->picLink;
    }

    /**
     * Set nbSignal
     *
     * @param integer $nbSignal
     *
     * @return Post
     */
    public function setNbSignal($nbSignal)
    {
        $this->nbSignal = $nbSignal;

        return $this;
    }

    /**
     * Get nbSignal
     *
     * @return int
     */
    public function getNbSignal()
    {
        return $this->nbSignal;
    }
}

