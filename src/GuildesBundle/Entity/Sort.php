<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sort
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\SortRepository")
 */
class Sort {

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
     * @ORM\Column(name="diff", type="string", length=255)
     */
    protected $diff;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    protected $type;

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
     * @ORM\Column(name="effet", type="text")
     */
    protected $effet;

    /**
     * @ORM\ManyToOne(targetEntity="GuildesBundle\Entity\Maison")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $maison;

    /**
     * Set maison
     *
     * @param Maison $maison
     */
    public function setMaison(\GuildesBundle\Entity\Maison $maison) {
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
     * Set type
     *
     * @param string $type
     * @return Sort
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
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
