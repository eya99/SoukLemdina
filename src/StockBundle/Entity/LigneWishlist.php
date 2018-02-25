<?php

namespace StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneWishlist
 *
 * @ORM\Table(name="ligne_wishlist")
 * @ORM\Entity(repositoryClass="StockBundle\Repository\LigneWishlistRepository")
 */
class LigneWishlist
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
     *
     * @ORM\ManyToOne(targetEntity="StockBundle\Entity\Wishlist")
     * @ORM\JoinColumn(name="idWishlist",referencedColumnName="id")
     *
     */
    private $idWishlist;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="StockBundle\Entity\Produit")
     * @ORM\JoinColumn(name="idProduit",referencedColumnName="id")
     *
     */
    private $idProduit;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idWishlist
     *
     * @param integer $idWishlist
     *
     * @return LigneWishlist
     */
    public function setIdWishlist($idWishlist)
    {
        $this->idWishlist = $idWishlist;
    
        return $this;
    }

    /**
     * Get idWishlist
     *
     * @return integer
     */
    public function getIdWishlist()
    {
        return $this->idWishlist;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return LigneWishlist
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    
        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}

