<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortilege
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\SortilegeRepository")
 */
class Sortilege {

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
     * @ORM\Column(name="portee", type="string", length=255)
     */
    protected $portee;

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
    public function setMaison(Maison $maison) {
        $this->maison = $maison;
    }

    /**
     * Get maison
     *
     * @return \GuildesBundle\Entity\Maison
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
     * @return Sortilege
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
     * @return Sortilege
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
     * @return Sortilege
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
     * Set effet
     *
     * @param string $effet
     * @return Sortilege
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
