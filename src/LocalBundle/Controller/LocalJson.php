<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 25/04/2018
 * Time: 10:01
 */

namespace LocalBundle\Controller;
use LocalBundle\Entity\Local;


class LocalJson
{

    /**
    * @var int
    */
    private  $idJ;

    /**
     * @var int
     */
    private $idUserJ;

    /**
     * @var int
     */
    private $prixJ;

    /**
     * @var int
     */
    private $superficieJ;

    /**
     * @var string
     */
    private $descriptionJ;

    /**
     * @var string
     */
    private $typeJ;

    /**
     * @var string
     */
    private $imageJ;

    /**
     * @var string
     */
    private $adresseJ;

    /**
     * @var string
     */
    private $telephoneJ;










    /**
     * LocalJson constructor.
     * @param Local $ll

     */
    public function __construct(Local $ll)
    {
       $this->idJ = $ll->getId();
       $this->idUserJ = $ll->getIdUser()->getId();
       $this->adresseJ = $ll->getAdresse();
       $this->descriptionJ = $ll->getDescription();
       $this->telephoneJ = $ll->getTelephone();
       $this->typeJ = $ll->getType();
       $this->superficieJ = $ll->getSuperficie();
       $this->prixJ = $ll->getPrix();
       $this->imageJ = $ll->getImage();

    }





    /**
     * @return int
     */
    public function getIdJ()
    {
        return $this->idJ;
    }

    /**
     * @param int $idJ
     */
    public function setIdJ($idJ)
    {
        $this->idJ = $idJ;
    }

    /**
     * @return int
     */
    public function getIdUserJ()
    {
        return $this->idUserJ;
    }

    /**
     * @param int $idUserJ
     */
    public function setIdUserJ($idUserJ)
    {
        $this->idUserJ = $idUserJ;
    }

    /**
     * @return int
     */
    public function getPrixJ()
    {
        return $this->prixJ;
    }

    /**
     * @param int $prixJ
     */
    public function setPrixJ($prixJ)
    {
        $this->prixJ = $prixJ;
    }

    /**
     * @return int
     */
    public function getSuperficieJ()
    {
        return $this->superficieJ;
    }

    /**
     * @param int $superficieJ
     */
    public function setSuperficieJ($superficieJ)
    {
        $this->superficieJ = $superficieJ;
    }

    /**
     * @return string
     */
    public function getDescriptionJ()
    {
        return $this->descriptionJ;
    }

    /**
     * @param string $descriptionJ
     */
    public function setDescriptionJ($descriptionJ)
    {
        $this->descriptionJ = $descriptionJ;
    }

    /**
     * @return string
     */
    public function getTypeJ()
    {
        return $this->typeJ;
    }

    /**
     * @param string $typeJ
     */
    public function setTypeJ($typeJ)
    {
        $this->typeJ = $typeJ;
    }

    /**
     * @return string
     */
    public function getImageJ()
    {
        return $this->imageJ;
    }

    /**
     * @param string $imageJ
     */
    public function setImageJ($imageJ)
    {
        $this->imageJ = $imageJ;
    }

    /**
     * @return string
     */
    public function getAdresseJ()
    {
        return $this->adresseJ;
    }

    /**
     * @param string $adresseJ
     */
    public function setAdresseJ($adresseJ)
    {
        $this->adresseJ = $adresseJ;
    }

    /**
     * @return string
     */
    public function getTelephoneJ()
    {
        return $this->telephoneJ;
    }

    /**
     * @param string $telephoneJ
     */
    public function setTelephoneJ($telephoneJ)
    {
        $this->telephoneJ = $telephoneJ;
    }






}