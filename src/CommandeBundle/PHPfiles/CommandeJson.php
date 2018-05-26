<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 4/22/2018
 * Time: 10:11 PM
 */
namespace CommandeBundle\PHPfiles;
use MongoDB\BSON\Timestamp;

class CommandeJson{
    /**
     * @var int
     **/
    private $id;
    /**
     * @var Timestamp
     **/
    private $dateCommande;
    /**
     * @var Timestamp
     **/
    private $dateMax;

    /**
     * CommandeJson constructor.
     */
    public function __construct()
    {

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * @param mixed $dateCommande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;
    }

    /**
     * @return mixed
     */
    public function getDateMax()
    {
        return $this->dateMax;
    }

    /**
     * @param mixed $dateMax
     */
    public function setDateMax($dateMax)
    {
        $this->dateMax = $dateMax;
    }



}