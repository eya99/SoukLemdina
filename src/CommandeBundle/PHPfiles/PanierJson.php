<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 4/25/2018
 * Time: 2:37 AM
 */

namespace CommandeBundle\PHPfiles;


class PanierJson
{
    /**
     * @var string
     **/
private  $prodImg;
    /**
     * @var string
     **/
private  $libelle;
    /**
     * @var string
     **/
private  $qte;
private  $prixTot;

    /**
     * PanierJson constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getProdImg()
    {
        return $this->prodImg;
    }

    /**
     * @param mixed $prodImg
     */
    public function setProdImg($prodImg)
    {
        $this->prodImg = $prodImg;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * @return mixed
     */
    public function getPrixTot()
    {
        return $this->prixTot;
    }

    /**
     * @param mixed $prixTot
     */
    public function setPrixTot($prixTot)
    {
        $this->prixTot = $prixTot;
    }

}