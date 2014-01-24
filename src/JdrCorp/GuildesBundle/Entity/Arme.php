<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\ArmeRepository")
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="init", type="integer")
     */
    private $init;

    /**
     * @var integer
     *
     * @ORM\Column(name="att", type="integer")
     */
    private $att;

    /**
     * @var integer
     *
     * @ORM\Column(name="def", type="integer")
     */
    private $def;

    /**
     * @var string
     *
     * @ORM\Column(name="blessure", type="string", length=255)
     */
    private $blessure;

    /**
     * @var integer
     *
     * @ORM\Column(name="enc", type="integer")
     */
    private $enc;

    /**
     * @var integer
     *
     * @ORM\Column(name="fort", type="integer")
     */
    private $fort;

    /**
     * @var integer
     *
     * @ORM\Column(name="cad", type="integer")
     */
    private $cad;

    /**
     * @var integer
     *
     * @ORM\Column(name="pmoy", type="integer")
     */
    private $pmoy;

    /**
     * @var integer
     *
     * @ORM\Column(name="peff", type="integer")
     */
    private $peff;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Competence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competence;

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
     * @return Arme
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
     * Set init
     *
     * @param integer $init
     * @return Arme
     */
    public function setInit($init) {
        $this->init = $init;

        return $this;
    }

    /**
     * Get init
     *
     * @return integer 
     */
    public function getInit() {
        return $this->init;
    }

    /**
     * Set att
     *
     * @param integer $att
     * @return Arme
     */
    public function setAtt($att) {
        $this->att = $att;

        return $this;
    }

    /**
     * Get att
     *
     * @return integer 
     */
    public function getAtt() {
        return $this->att;
    }

    /**
     * Set def
     *
     * @param integer $def
     * @return Arme
     */
    public function setDef($def) {
        $this->def = $def;

        return $this;
    }

    /**
     * Get def
     *
     * @return integer 
     */
    public function getDef() {
        return $this->def;
    }

    /**
     * Set blessure
     *
     * @param string $blessure
     * @return Arme
     */
    public function setBlessure($blessure) {
        $this->blessure = $blessure;

        return $this;
    }

    /**
     * Get blessure
     *
     * @return string 
     */
    public function getBlessure() {
        return $this->blessure;
    }

    /**
     * Set enc
     *
     * @param integer $enc
     * @return Arme
     */
    public function setEnc($enc) {
        $this->enc = $enc;

        return $this;
    }

    /**
     * Get enc
     *
     * @return integer 
     */
    public function getEnc() {
        return $this->enc;
    }

    /**
     * Set fort
     *
     * @param integer $fort
     * @return Arme
     */
    public function setFort($fort) {
        $this->fort = $fort;

        return $this;
    }

    /**
     * Get fort
     *
     * @return integer 
     */
    public function getFort() {
        return $this->fort;
    }

    /**
     * Set cad
     *
     * @param integer $cad
     * @return Arme
     */
    public function setCad($cad) {
        $this->cad = $cad;

        return $this;
    }

    /**
     * Get cad
     *
     * @return integer 
     */
    public function getCad() {
        return $this->cad;
    }

    /**
     * Set pmoy
     *
     * @param integer $pmoy
     * @return Arme
     */
    public function setPmoy($pmoy) {
        $this->pmoy = $pmoy;

        return $this;
    }

    /**
     * Get pmoy
     *
     * @return integer 
     */
    public function getPmoy() {
        return $this->pmoy;
    }

    /**
     * Set peff
     *
     * @param integer $peff
     * @return Arme
     */
    public function setPeff($peff) {
        $this->peff = $peff;

        return $this;
    }

    /**
     * Get peff
     *
     * @return integer 
     */
    public function getPeff() {
        return $this->peff;
    }

    public function setCompetence(\JdrCorp\GuildesBundle\Entity\Competence $competence) {
        $this->competence = $competence;
    }

    public function getCompetence() {
        return $this->competence;
    }

}
