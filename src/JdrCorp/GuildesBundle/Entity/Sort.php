<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sort
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\SortRepository")
 */
class Sort {

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
     * @ORM\Column(name="diff", type="string", length=255)
     */
    private $diff;

    /**
     * @var string
     *
     * @ORM\Column(name="portee", type="string", length=255)
     */
    private $portee;

    /**
     * @var string
     *
     * @ORM\Column(name="cible", type="string", length=255)
     */
    private $cible;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="text")
     */
    private $effet;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Maison")
     * @ORM\JoinColumn(nullable=false)
     */
    private $maison;

    /**
     * Set maison
     *
     * @param JdrCorp\GuildesBundle\Entity\Maison $maison
     */
    public function setMaison(\JdrCorp\GuildesBundle\Entity\Maison $maison) {
        $this->maison = $maison;
    }

    /**
     * Get maison
     *
     * @return JdrCorp\GuildesBundle\Entity\Maison
     */
    public function getMaison() {
        return $this->maison;
    }

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
     * @return Sort
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
     * Set diff
     *
     * @param string $diff
     * @return Sort
     */
    public function setDiff($diff) {
        $this->diff = $diff;

        return $this;
    }

    /**
     * Get diff
     *
     * @return string 
     */
    public function getDiff() {
        return $this->diff;
    }

    /**
     * Set portee
     *
     * @param string $portee
     * @return Sort
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
     * @return Sort
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
     * Set effet
     *
     * @param string $effet
     * @return Sort
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

}
