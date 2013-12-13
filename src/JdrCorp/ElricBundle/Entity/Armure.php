<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Armure
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\ArmureRepository")
 */
class Armure
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abs", type="string", length=10)
     */
    private $abs;

    /**
     * @var string
     *
     * @ORM\Column(name="abs_sans", type="string", length=10)
     */
    private $absSans;

    /**
     * @var string
     *
     * @ORM\Column(name="enc", type="string", length=255)
     */
    private $enc;


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
     * @return Armure
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
     * Set abs
     *
     * @param string $abs
     * @return Armure
     */
    public function setAbs($abs)
    {
        $this->abs = $abs;
    
        return $this;
    }

    /**
     * Get abs
     *
     * @return string 
     */
    public function getAbs()
    {
        return $this->abs;
    }

    /**
     * Set absSans
     *
     * @param string $absSans
     * @return Armure
     */
    public function setAbsSans($absSans)
    {
        $this->absSans = $absSans;
    
        return $this;
    }

    /**
     * Get absSans
     *
     * @return string 
     */
    public function getAbsSans()
    {
        return $this->absSans;
    }

    /**
     * Set enc
     *
     * @param string $enc
     * @return Armure
     */
    public function setEnc($enc)
    {
        $this->enc = $enc;
    
        return $this;
    }

    /**
     * Get enc
     *
     * @return string 
     */
    public function getEnc()
    {
        return $this->enc;
    }
}
