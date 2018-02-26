<?php
/**
 * Created by PhpStorm.
 * User: ramyk
 * Date: 2/7/2018
 * Time: 4:51 PM
 */

namespace SUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Model\ParticipantInterface;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class User
 * @package SUserBundle\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User extends BaseUser implements ParticipantInterface
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    protected $gender;

    /**
     * @var
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     *
     * @Assert\Regex(
     *     pattern     = "/^[a-z]+$/i",
     *     htmlPattern = "^[a-zA-Z]+$"
     * )
     *
     */
    protected $firstname;

    /**
     * @var
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     *
     * @Assert\Regex(
     *     pattern     = "/^[a-z]+$/i",
     *     htmlPattern = "^[a-zA-Z]+$"
     * )
     *
     */
    protected $lastname;

    /**
     * @var
     *
     * @ORM\Column(name="rue", type="text", nullable=true, nullable=true)
     */
    protected $rue;

    /**
     * @var
     *
     * @ORM\Column(name="zip_code", type="integer", length=255, nullable=true)
     * @Assert\Range(
     *      min = 1000,
     *      max = 9999,
     *      minMessage = "Êtes-vous sûr de votre zip code? Habitez-vous sur Mars?(Ca doit être un nombre de 4 chiffres au minimum)",
     *      maxMessage = "Êtes-vous sûr de votre zip code? Habitez-vous sur Mars?(Ca doit être un nombre de 4 chiffres au maximum)"
     * )
     */
    protected $zipCode;

    /**
     * @var
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    protected $ville;

    /**
     * @var
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    protected $pays;

    /**
     * @var
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    protected $phone;

    /**
     * @var
     *
     * @ORM\Column(name="nbsignal", type="integer", nullable=true)
     */
    protected $nbsignal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaiss", type="date")
     * @Assert\DateTime()
     * @Assert\Range(
     *      min = "first day of January 1950",
     *      max = "first day of January 2007",
     *      minMessage = "Êtes-vous sûr de votre date de naissance? On est une plateforme de jeunes là Monsieur (plus ou moins).",
     *      maxMessage = "Êtes-vous sûr de votre date de naissance? On doit être un peu plus agé pour avoir un tel métier mon petit."
     * )
     */
    private $datenaiss;

    /**
     * Set datenaiss
     *
     * @param \DateTime $datenaiss
     *
     * @return User
     */
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    /**
     * Get datenaiss
     *
     * @return \DateTime
     */
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->roles = array('ROLE_USER');
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }



    /**
     * @param mixed $rue
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getNbsignal()
    {
        return $this->nbsignal;
    }

    /**
     * @param mixed $nbsignal
     */
    public function setNbsignal($nbsignal)
    {
        $this->nbsignal = $nbsignal;
    }

}
