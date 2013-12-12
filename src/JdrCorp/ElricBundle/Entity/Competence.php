<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\CompetenceRepository")
 */
class Competence {

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
     * @var integer
     *
     * @ORM\Column(name="base", type="integer")
     */
    private $base;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

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
     * @return Competence
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
     * Set base
     *
     * @param integer $base
     * @return Competence
     */
    public function setBase($base) {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return integer 
     */
    public function getBase() {
        return $this->base;
    }
    
    /**
     * Set total
     *
     * @param integer $total
     * @return Competence
     */
    public function setTotal($total) {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Get metiers
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getMetiers() {
        return $this->metiers;
    }

}
