<?php
/**
 * Created by PhpStorm.
 * User: rkader
 * Date: 21/04/18
 * Time: 03:26 م
 */

namespace SocialBundle\Controller;

use SocialBundle\Entity\Post;
use SocialBundle\Entity\Profile;

class MapPrPos
{
    /**
     * @var int
     */
    private $idPr;

    /**
     * @var int
     */
    private $idUserPr;

    /**
     * @var string
     */
    private $taglinePr;

    /**
     * @var string
     */
    private $aboutMePr;

    /**
     * @var string
     */
    private $imagePr;

    /**
     * @var \DateTime
     */
    private $updatedAtPr;

    /**
     * @var integer
     */
    private $idPos;

    /**
     * @var int
     */
    private $idUserPos;

    /**
     * @var \DateTime
     */
    private $datePos;

    /**
     * @var string
     */
    private $textePos;

    /**
     * @var string
     */
    private $titrePos;

    /**
     * @var string
     */
    private $imagePos;

    /**
     * @var \DateTime
     */
    private $updatedAtPos;

    /**
     * @var int
     */
    private $nbSignalPos;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var boolean
     */
    private $mfollowi;

    /**
     * MapPrPos constructor.
     * @param Post $pos
     * @param Profile $pr
     * @param $fname
     * @param $lname
     */
    public function __construct(Post $pos, Profile $pr, $fname, $lname, $mfollow)
    {
        $this->idPr = $pr->getId();
        $this->idUserPr = $pr->getIdUser()->getId();
        $this->taglinePr = $pr->getTagline();
        $this->aboutMePr = $pr->getAboutMe();
        if ($pr->getImage() == null)
            $this->imagePr = "avatar.jpg";
        else
            $this->imagePr = $pr->getImage();
        $this->updatedAtPr = $pr->getUpdatedAt()->getTimestamp();
        $this->idPos = $pos->getId();
        $this->datePos = $pos->getDate()->getTimestamp();
        $this->idUserPos = $pos->getIdUser()->getId();
        $this->imagePos = $pos->getImage();
        $this->nbSignalPos = $pos->getNbSignal();
        $this->textePos = $pos->getTexte();
        $this->titrePos = $pos->getTitre();
        $this->updatedAtPos = $pos->getUpdatedAt()->getTimestamp();
        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->mfollowi = $mfollow;
    }

    /**
     * @return int
     */
    public function getIdPr()
    {
        return $this->idPr;
    }

    /**
     * @param int $idPr
     */
    public function setIdPr($idPr)
    {
        $this->idPr = $idPr;
    }

    /**
     * @return int
     */
    public function getIdUserPr()
    {
        return $this->idUserPr;
    }

    /**
     * @param int $idUserPr
     */
    public function setIdUserPr($idUserPr)
    {
        $this->idUserPr = $idUserPr;
    }

    /**
     * @return string
     */
    public function getTaglinePr()
    {
        return $this->taglinePr;
    }

    /**
     * @param string $taglinePr
     */
    public function setTaglinePr($taglinePr)
    {
        $this->taglinePr = $taglinePr;
    }

    /**
     * @return string
     */
    public function getAboutMePr()
    {
        return $this->aboutMePr;
    }

    /**
     * @param string $aboutMePr
     */
    public function setAboutMePr($aboutMePr)
    {
        $this->aboutMePr = $aboutMePr;
    }

    /**
     * @return string
     */
    public function getImagePr()
    {
        return $this->imagePr;
    }

    /**
     * @param string $imagePr
     */
    public function setImagePr($imagePr)
    {
        $this->imagePr = $imagePr;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAtPr()
    {
        return $this->updatedAtPr;
    }

    /**
     * @param \DateTime $updatedAtPr
     */
    public function setUpdatedAtPr($updatedAtPr)
    {
        $this->updatedAtPr = $updatedAtPr;
    }

    /**
     * @return int
     */
    public function getIdPos()
    {
        return $this->idPos;
    }

    /**
     * @param int $idPos
     */
    public function setIdPos($idPos)
    {
        $this->idPos = $idPos;
    }

    /**
     * @return int
     */
    public function getIdUserPos()
    {
        return $this->idUserPos;
    }

    /**
     * @param int $idUserPos
     */
    public function setIdUserPos($idUserPos)
    {
        $this->idUserPos = $idUserPos;
    }

    /**
     * @return \DateTime
     */
    public function getDatePos()
    {
        return $this->datePos;
    }

    /**
     * @param \DateTime $datePos
     */
    public function setDatePos($datePos)
    {
        $this->datePos = $datePos;
    }

    /**
     * @return string
     */
    public function getTextePos()
    {
        return $this->textePos;
    }

    /**
     * @param string $textePos
     */
    public function setTextePos($textePos)
    {
        $this->textePos = $textePos;
    }

    /**
     * @return string
     */
    public function getTitrePos()
    {
        return $this->titrePos;
    }

    /**
     * @param string $titrePos
     */
    public function setTitrePos($titrePos)
    {
        $this->titrePos = $titrePos;
    }

    /**
     * @return string
     */
    public function getImagePos()
    {
        return $this->imagePos;
    }

    /**
     * @param string $imagePos
     */
    public function setImagePos($imagePos)
    {
        $this->imagePos = $imagePos;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAtPos()
    {
        return $this->updatedAtPos;
    }

    /**
     * @param \DateTime $updatedAtPos
     */
    public function setUpdatedAtPos($updatedAtPos)
    {
        $this->updatedAtPos = $updatedAtPos;
    }

    /**
     * @return int
     */
    public function getNbSignalPos()
    {
        return $this->nbSignalPos;
    }

    /**
     * @param int $nbSignalPos
     */
    public function setNbSignalPos($nbSignalPos)
    {
        $this->nbSignalPos = $nbSignalPos;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return bool
     */
    public function isMfollowi()
    {
        return $this->mfollowi;
    }

    /**
     * @param bool $mfollowi
     */
    public function setMfollowi($mfollowi)
    {
        $this->mfollowi = $mfollowi;
    }

}