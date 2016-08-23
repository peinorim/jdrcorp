<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\TourRepository")
 */
class Tour {

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
     * @ORM\Column(name="portee", type="string", length=255)
     */
    protected $portee;

    /**
     * @var string
     *
     * @ORM\Column(name="cible", type="string", length=255)
     */
    protected $cible;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    protected $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="text")
     */
    protected $effet;

    /**
     * @ORM\ManyToOne(targetEntity="GuildesBundle\Entity\Maison")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $maison;

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
     * @return Tour
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
     * Set portee
     *
     * @param string $portee
     * @return Tour
     */
    public function setPortee($portee) {
        $this->portee = $portee;

        return $this;
    }

    /**
     * Get portee
     *
     * @return string 
     */
    public function getPortee() {
        return $this->portee;
    }

    /**
     * Set cible
     *
     * @param string $cible
     * @return Tour
     */
    public function setCible($cible) {
        $this->cible = $cible;

        return $this;
    }

    /**
     * Get cible
     *
     * @return string 
     */
    public function getCible() {
        return $this->cible;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Tour
     */
    public function setDuree($duree) {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Set effet
     *
     * @param string $effet
     * @return Tour
     */
    public function setEffet($effet) {
        $this->effet = $effet;

        return $this;
    }

    /**
     * Get effet
     *
     * @return string 
     */
    public function getEffet() {
        return $this->effet;
    }

    /**
     * Set maison
     *
     * @param Maison $maison
     */
    public function setMaison(Maison $maison) {
        $this->maison = $maison;
    }

    /**
     * Get maison
     *
     * @return Maison
     */
    public function getMaison() {
        return $this->maison;
    }

}
