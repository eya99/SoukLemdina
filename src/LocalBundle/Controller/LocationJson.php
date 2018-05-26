<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 25/04/2018
 * Time: 11:48
 */

namespace LocalBundle\Controller;

use LocalBundle\Entity\Location;
class LocationJson
{
    /**
     * @var Date
     */
    private $dateD;

    /**
     * @var Date
     */
    private $dateF;

    /**
     * @var int
     */
    private $idUs;

    /**
     * @var int
     */
    private $idUserLoc;

    /**
     * @var int
     */
    private $idLocal;

    /**
     * @var int
     */
    private $idLoct;

    /**
     * @return Date
     */
    public function getDateD()
    {
        return $this->dateD;
    }

    /**
     * @param Date $dateD
     */
    public function setDateD($dateD)
    {
        $this->dateD = $dateD;
    }

    /**
     * @return Date
     */
    public function getDateF()
    {
        return $this->dateF;
    }

    /**
     * @param Date $dateF
     */
    public function setDateF($dateF)
    {
        $this->dateF = $dateF;
    }

    /**
     * @return int
     */
    public function getIdUs()
    {
        return $this->idUs;
    }

    /**
     * @param int $idUs
     */
    public function setIdUs($idUs)
    {
        $this->idUs = $idUs;
    }

    /**
     * @return int
     */
    public function getIdUserLoc()
    {
        return $this->idUserLoc;
    }

    /**
     * @param int $idUserLoc
     */
    public function setIdUserLoc($idUserLoc)
    {
        $this->idUserLoc = $idUserLoc;
    }

    /**
     * @return int
     */
    public function getIdLocal()
    {
        return $this->idLocal;
    }

    /**
     * @param int $idLocal
     */
    public function setIdLocal($idLocal)
    {
        $this->idLocal = $idLocal;
    }

    /**
     * @return int
     */
    public function getIdLoct()
    {
        return $this->idLoct;
    }

    /**
     * @param int $idLoct
     */
    public function setIdLoct($idLoct)
    {
        $this->idLoct = $idLoct;
    }


    /**
     * LocalJson constructor.
     * @param Location $lt
     * @param $id
     */
    public function __construct(Location $lt,$id)
    {



        $this->idUserLoc = $lt->getIdUser()->getId();
        $this->dateD = $lt->getDateDebutLocation()->getTimestamp()*1000;
        $this->dateF = $lt->getDateFinLocation()->getTimestamp()*1000;

        $this->idUs = $id;


    }
}