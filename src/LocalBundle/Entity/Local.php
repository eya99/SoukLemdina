<?php

namespace LocalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Local
 *
 * @ORM\Table(name="local")
 * @ORM\Entity(repositoryClass="LocalBundle\Repository\LocalRepository")
 * @Vich\Uploadable
 */
class Local
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
     * @var float
     *
     * @ORM\Column(name="superficie", type="float",nullable=true)
     */
    private $superficie;



    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float",nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255,nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255,nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255,nullable=true)
     */
    private $telephone;



    /**
     * @var int
     *
     * @ORM\Column(name="nbSignal", type="integer",nullable=true)
     */
    private $nbSignal;



    /**
     * @var string
     *
     * @ORM\Column(name="titre",type="string",length=255,nullable=true)
     */
    private $titre;

    /**
     * @var string
     * @Assert\NotBlank(message="entrez image")
     * @Assert\Image()
     * @ORM\Column(name="image",type="string",length=255)
     */
    private $image;
    /**
     * @var string
     *
     * @ORM\Column(name="located",type="string",length=255,nullable=true)
     */
    private $located;



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
     * @return Local
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
     * Set superficie
     *
     * @param float $superficie
     *
     * @return Local
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return string
     */
    public function getLocated()
    {
        return $this->located;
    }

    /**
     * @param string $located
     */
    public function setLocated($located)
    {
        $this->located = $located;
    }


    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }


    /**
     * Get superficie
     *
     * @return float
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Local
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
     * Set type
     *
     * @param string $type
     *
     * @return Local
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
     * Set description
     *
     * @param string $description
     *
     * @return Local
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Local
     *
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
     * Set nbSignal
     *
     * @param integer $nbSignal
     *
     * @return Local
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
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }





}

