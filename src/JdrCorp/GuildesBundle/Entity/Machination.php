<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machination
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\MachinationRepository")
 */
class Machination {

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
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="novice", type="text")
     */
    private $novice;

    /**
     * @var string
     *
     * @ORM\Column(name="initie", type="text")
     */
    private $initie;

    /**
     * @var string
     *
     * @ORM\Column(name="expert", type="text")
     */
    private $expert;

    /**
     * @var string
     *
     * @ORM\Column(name="effet_pervers", type="text")
     */
    private $effetPervers;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Chapitre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chapitre;

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
     * @return Machination
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
     * Set description
     *
     * @param string $description
     * @return Machination
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return MachiNiveau
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Set novice
     *
     * @param string $novice
     * @return Machination
     */
    public function setNovice($novice) {
        $this->novice = $novice;

        return $this;
    }

    /**
     * Get novice
     *
     * @return string 
     */
    public function getNovice() {
        return $this->novice;
    }

    /**
     * Set initie
     *
     * @param string $initie
     * @return Machination
     */
    public function setinitie($initie) {
        $this->initie = $initie;

        return $this;
    }

    /**
     * Get initie
     *
     * @return string 
     */
    public function getInitie() {
        return $this->initie;
    }

    /**
     * Set expert
     *
     * @param string $expert
     * @return Machination
     */
    public function setExpert($expert) {
        $this->expert = $expert;

        return $this;
    }

    /**
     * Get expert
     *
     * @return string 
     */
    public function getExpert() {
        return $this->expert;
    }

    /**
     * Set effetPervers
     *
     * @param string $effetPervers
     * @return Machination
     */
    public function setEffetPervers($effetPervers) {
        $this->effetPervers = $effetPervers;

        return $this;
    }

    /**
     * Get effetPervers
     *
     * @return string 
     */
    public function getEffetPervers() {
        return $this->effetPervers;
    }

    /**
     * Set chapitre
     *
     * @param JdrCorp\GuildesBundle\Entity\Chapitre $chapitre
     */
    public function setChapitre(\JdrCorp\GuildesBundle\Entity\Chapitre $chapitre) {
        $this->chapitre = $chapitre;
    }

    /**
     * Get chapitre
     *
     * @return JdrCorp\GuildesBundle\Entity\Chapitre
     */
    public function getChapitre() {
        return $this->chapitre;
    }

}
