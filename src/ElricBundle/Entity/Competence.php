<?php

namespace ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="Competence")
 * @ORM\Entity(repositoryClass="ElricBundle\Repository\CompetenceRepository")
 */
class Competence {

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
     * @var integer
     *
     * @ORM\Column(name="base", type="integer")
     */
    protected $base;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer")
     */
    protected $total;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    protected $type;

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
     * Set type
     *
     * @param string $type
     * @return Competence
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType() {
        return $this->type;
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
