<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneDeCommande
 *
 * @ORM\Table(name="ligne_de_commande")
 * @ORM\Entity(repositoryClass="CommandeBundle\Repository\LigneDeCommandeRepository")
 */
class LigneDeCommande
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
     * @ORM\ManyToOne(targetEntity="StockBundle\Entity\Produit")
     * @ORM\JoinColumn(name="id_produit",referencedColumnName="id")
     */
    private $idProduit;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Commande")
     * @ORM\JoinColumn(name="id_commande",referencedColumnName="id")
     */
    private $idCommande;

    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaire", type="float")
     */
    private $prixUnitaire;

    /**
     * @var int
     *
     * @ORM\Column(name="tva", type="integer")
     */
    private $tva;

    /**
     * @var int
     *
     * @ORM\Column(name="quntite", type="integer")
     */
    private $quntite;

    /**
     * @var int
     *
     * @ORM\Column(name="remise", type="integer")
     */
    private $remise;


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
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return LigneDeCommande
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idCommande
     *
     * @param integer $idCommande
     *
     * @return LigneDeCommande
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return int
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     *
     * @return LigneDeCommande
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set tva
     *
     * @param integer $tva
     *
     * @return LigneDeCommande
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return int
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set quntite
     *
     * @param integer $quntite
     *
     * @return LigneDeCommande
     */
    public function setQuntite($quntite)
    {
        $this->quntite = $quntite;

        return $this;
    }

    /**
     * Get quntite
     *
     * @return int
     */
    public function getQuntite()
    {
        return $this->quntite;
    }

    /**
     * Set remise
     *
     * @param integer $remise
     *
     * @return LigneDeCommande
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return int
     */
    public function getRemise()
    {
        return $this->remise;
    }
}

