<?php

namespace LocalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="LocalBundle\Repository\LocationRepository")
 */
class Location
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
     * @ORM\ManyToOne(targetEntity="LocalBundle\Entity\Local")
     * @ORM\JoinColumn(name="id_local",referencedColumnName="id")
     */
    private $idLocal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutLocation", type="date")
     */
    private $dateDebutLocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinLocation", type="date")
     */
    private $dateFinLocation;


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
     * @return Location
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
     * Set idLocal
     *
     * @param integer $idLocal
     *
     * @return Location
     */
    public function setIdLocal($idLocal)
    {
        $this->idLocal = $idLocal;

        return $this;
    }

    /**
     * Get idLocal
     *
     * @return int
     */
    public function getIdLocal()
    {
        return $this->idLocal;
    }

    /**
     * Set dateDebutLocation
     *
     * @param \DateTime $dateDebutLocation
     *
     * @return Location
     */
    public function setDateDebutLocation($dateDebutLocation)
    {
        $this->dateDebutLocation = $dateDebutLocation;

        return $this;
    }

    /**
     * Get dateDebutLocation
     *
     * @return \DateTime
     */
    public function getDateDebutLocation()
    {
        return $this->dateDebutLocation;
    }

    /**
     * Set dateFinLocatiom
     *
     * @param \DateTime $dateFinLocation
     *
     * @return Location
     */
    public function setDateFinLocation($dateFinLocation)
    {
        $this->dateFinLocation = $dateFinLocation;

        return $this;
    }

    /**
     * Get dateFinLocation
     *
     * @return \DateTime
     */
    public function getDateFinLocation()
    {
        return $this->dateFinLocation;
    }
}

