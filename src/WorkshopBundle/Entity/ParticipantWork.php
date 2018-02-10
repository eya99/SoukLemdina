<?php

namespace WorkshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipantWork
 *
 * @ORM\Table(name="participant_work")
 * @ORM\Entity(repositoryClass="WorkshopBundle\Repository\ParticipantWorkRepository")
 */
class ParticipantWork
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
     * @var int
     * @ORM\ManyToOne(targetEntity="WorkshopBundle\Entity\Workshop")
     * @ORM\JoinColumn(name="id_workshop",referencedColumnName="id")
     */
    private $idWorkshop;


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
     * @return ParticipantWork
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
     * Set idWorkshop
     *
     * @param integer $idWorkshop
     *
     * @return ParticipantWork
     */
    public function setIdWorkshop($idWorkshop)
    {
        $this->idWorkshop = $idWorkshop;

        return $this;
    }

    /**
     * Get idWorkshop
     *
     * @return int
     */
    public function getIdWorkshop()
    {
        return $this->idWorkshop;
    }
}

