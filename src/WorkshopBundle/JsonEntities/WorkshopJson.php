<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 23/04/2018
 * Time: 19:50
 */

namespace WorkshopBundle\JsonEntities;


class WorkshopJson
{
    /**
     * @var int
     **/
    private $id;
    /**
     * @var string
     **/
    private $nomWorkshop;

    /**
     * WorkshopJson constructor.
     */
    /**
     * @var \DateTime
     **/
    private $dateDebut;
    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @var float
     *

     */
    private $prix;
    /**
     * @var string
     *
     */
private $adresse;
    /**
     * @var \DateTime

     */
    private $dateFin;

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    /**
     * @var string
     *
     */


    private $description;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @var string
     *
     */
    private $type;

    /**
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param string $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
    /**
     * @var string
     *
     */
private $idUser;
    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * @param int $nbPlace
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;
    }

    /**
     * @var int
     *

     */
    private $nbPlace;


    /**

     * @var string
     */
    private $image;

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomWorkshop()
    {
        return $this->nomWorkshop;
    }

    /**
     * @param string $nomWorkshop
     */
    public function setNomWorkshop($nomWorkshop)
    {
        $this->nomWorkshop = $nomWorkshop;
    }

}