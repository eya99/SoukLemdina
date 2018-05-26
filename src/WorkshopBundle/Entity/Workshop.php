<?php

namespace WorkshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class Workshop
 * @package WorkshopBundle\Entity
 * @ORM\Table(name="workshop")
 * @ORM\Entity(repositoryClass="WorkshopBundle\Repository\WorkshopRepository")
 * @Vich\Uploadable
 */
class Workshop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTimeImmutable();
        }
        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nomWorkshop", type="string", length=255)
     */
    private $nomWorkshop;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     * @Assert\GreaterThan("today UTC")
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     * @Assert\GreaterThan("today UTC")
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlace", type="integer")
     */
    private $nbPlace;

    /**
     * @return int
     */
    public function getNbrrating()
    {
        return $this->nbrrating;
    }

    /**
     * @param int $nbrrating
     */
    public function setNbrrating($nbrrating)
    {
        $this->nbrrating = $nbrrating;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="nbrrating", type="integer", nullable=true)
     */
    private $nbrrating;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSignal", type="integer", nullable=true)
     */
    private $nbSignal;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255,nullable=true)
     */
    private $video;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     * @ORM\Column(name= "planning", type= "string", length=255,nullable=true)
     */
    private $planning;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="SUserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $idUser;


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
     * Set nomWorkshop
     *
     * @param string $nomWorkshop
     *
     * @return Workshop
     */
    public function setNomWorkshop($nomWorkshop)
    {
        $this->nomWorkshop = $nomWorkshop;

        return $this;
    }

    /**
     * Get nomWorkshop
     *
     * @return string
     */
    public function getNomWorkshop()
    {
        return $this->nomWorkshop;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Workshop
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Workshop
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Workshop
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Workshop
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     *
     * @return Workshop
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return int
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Workshop
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nbSignal
     *
     * @param integer $nbSignal
     *
     * @return Workshop
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Workshop
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Workshop
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set planning
     *
     * @param string $planning
     *
     * @return Workshop
     */
    public function setPlanning($planning)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return string
     */
    public function getPlanning()
    {
        return $this->planning;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     *
     * @return Workshop
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
