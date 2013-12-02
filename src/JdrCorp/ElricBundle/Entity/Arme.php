<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\ArmeRepository")
 */
class Arme
{
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
}
