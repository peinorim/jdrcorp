<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\EquipementRepository")
 */
class Equipement {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=50)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="rarete", type="integer")
     */
    private $rarete;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\EquipCategorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

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

    public function setCategorie(\JdrCorp\GuildesBundle\Entity\EquipCategorie $categorie) {
        $this->categorie = $categorie;
    }

    public function getCategorie() {
        return $this->categorie;
    }

}
