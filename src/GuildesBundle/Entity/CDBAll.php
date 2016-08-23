<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CDBAll
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\CDBAllRepository")
 */
class CDBAll
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
     * @return CDBAll
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
     * @return CDBAll
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
