<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Armure
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\ArmureRepository")
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
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="init", type="float")
     */
    protected $init;

    /**
     * @var float
     *
     * @ORM\Column(name="att", type="float")
     */
    protected $att;

    /**
     * @var float
     *
     * @ORM\Column(name="def", type="float")
     */
    protected $def;

    /**
     * @var float
     *
     * @ORM\Column(name="protec", type="float")
     */
    protected $protec;

    /**
     * @var integer
     *
     * @ORM\Column(name="enc", type="integer")
     */
    protected $enc;

    /**
     * @var integer
     *
     * @ORM\Column(name="fort", type="integer")
     */
    protected $fort;


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
     * Set init
     *
     * @param float $init
     * @return Armure
     */
    public function setInit($init)
    {
        $this->init = $init;
    
        return $this;
    }

    /**
     * Get init
     *
     * @return float 
     */
    public function getInit()
    {
        return $this->init;
    }

    /**
     * Set att
     *
     * @param float $att
     * @return Armure
     */
    public function setAtt($att)
    {
        $this->att = $att;
    
        return $this;
    }

    /**
     * Get att
     *
     * @return float 
     */
    public function getAtt()
    {
        return $this->att;
    }

    /**
     * Set def
     *
     * @param float $def
     * @return Armure
     */
    public function setDef($def)
    {
        $this->def = $def;
    
        return $this;
    }

    /**
     * Get def
     *
     * @return float 
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Set protec
     *
     * @param float $protec
     * @return Armure
     */
    public function setProtec($protec)
    {
        $this->protec = $protec;
    
        return $this;
    }

    /**
     * Get protec
     *
     * @return float 
     */
    public function getProtec()
    {
        return $this->protec;
    }

    /**
     * Set enc
     *
     * @param integer $enc
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
     * @return integer 
     */
    public function getEnc()
    {
        return $this->enc;
    }

    /**
     * Set fort
     *
     * @param integer $fort
     * @return Armure
     */
    public function setFort($fort)
    {
        $this->fort = $fort;
    
        return $this;
    }

    /**
     * Get fort
     *
     * @return integer 
     */
    public function getFort()
    {
        return $this->fort;
    }
}
