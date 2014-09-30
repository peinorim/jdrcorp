<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MESAll
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\MESAllRepository")
 */
class MESAll
{
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
     * @ORM\Column(name="nom", type="text")
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="text")
     */
    protected $effet;


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
     * @return MESAll
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
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
     * Set effet
     *
     * @param string $effet
     * @return MESAll
     */
    public function setEffet($effet)
    {
        $this->effet = $effet;
    
        return $this;
    }

    /**
     * Get effet
     *
     * @return string 
     */
    public function getEffet()
    {
        return $this->effet;
    }
}
