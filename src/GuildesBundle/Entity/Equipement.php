<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\EquipementRepository")
 */
class Equipement {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=50)
     */
    protected $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="rarete", type="integer")
     */
    protected $rarete;

    /**
     * @ORM\ManyToOne(targetEntity="GuildesBundle\Entity\EquipCategorie")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="base", type="integer")
     */
    protected $base;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Equipement
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Equipement
     */
    public function setPrix($prix) {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix() {
        return $this->prix;
    }

    /**
     * Set rarete
     *
     * @param integer $rarete
     * @return Equipement
     */
    public function setRarete($rarete) {
        $this->rarete = $rarete;

        return $this;
    }

    /**
     * Get rarete
     *
     * @return integer 
     */
    public function getRarete() {
        return $this->rarete;
    }

    public function setCategorie(EquipCategorie $categorie) {
        $this->categorie = $categorie;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    /**
     * Get base
     *
     * @return boolean 
     */
    public function getBase() {
        return $this->base;
    }

}
