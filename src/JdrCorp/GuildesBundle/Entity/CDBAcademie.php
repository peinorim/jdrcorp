<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CDBAcademie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\CDBAcademieRepository")
 */
class CDBAcademie
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
     * @var string
     *
     * @ORM\Column(name="nom", type="text")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="text")
     */
    private $effet;


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
     * @return CDBAcademie
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
     * @return CDBAcademie
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
