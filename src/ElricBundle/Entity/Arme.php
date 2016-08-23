<?php

namespace ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arme
 *
 * @ORM\Table(name="Arme")
 * @ORM\Entity(repositoryClass="ElricBundle\Repository\ArmeRepository")
 */
class Arme {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
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
     * @var string
     *
     * @ORM\Column(name="degats", type="string", length=255)
     */
    private $degats;

    /**
     * @var string
     *
     * @ORM\Column(name="mains", type="string", length=2)
     */
    private $mains;

    /**
     * @var integer
     *
     * @ORM\Column(name="structure", type="integer")
     */
    private $structure;

    /**
     * @var string
     *
     * @ORM\Column(name="for_dex", type="string", length=10)
     */
    private $for_dex;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer",nullable=true)
     */
    private $total;

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
     * Set nom
     *
     * @param string $nom
     * @return Arme
     */
    public function setNom($nom)
    {
        $this->base = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set base
     *
     * @param integer $base
     * @return Arme
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return integer 
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set degats
     *
     * @param string $degats
     * @return Arme
     */
    public function setDegats($degats)
    {
        $this->degats = $degats;

        return $this;
    }

    /**
     * Get degats
     *
     * @return string 
     */
    public function getDegats()
    {
        return $this->degats;
    }

    /**
     * Set mains
     *
     * @param string $mains
     * @return Arme
     */
    public function setMains($mains)
    {
        $this->mains = $mains;

        return $this;
    }

    /**
     * Get mains
     *
     * @return string 
     */
    public function getMains()
    {
        return $this->mains;
    }

    /**
     * Set structure
     *
     * @param integer $structure
     * @return Arme
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return integer 
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Set for_dex
     *
     * @param string $for_dex
     * @return Arme
     */
    public function setForDex($for_dex)
    {
        $this->for_dex = $for_dex;

        return $this;
    }

    /**
     * Get for_dex
     *
     * @return string 
     */
    public function getForDex()
    {
        return $this->for_dex;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Arme
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Arme
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Competence
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

}
