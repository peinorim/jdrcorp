<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\CompetenceRepository")
 */
class Competence {

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
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Chapitre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chapitre;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Carac")
     * @ORM\JoinColumn(nullable=false)
     */
    private $carac;

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
    
    /**
     * Set carac
     *
     * @param JdrCorp\GuildesBundle\Entity\Carac $carac
     */
    public function setCarac(\JdrCorp\GuildesBundle\Entity\Carac $carac) {
        $this->carac = $carac;
    }

    /**
     * Get carac
     *
     * @return JdrCorp\GuildesBundle\Entity\carac
     */
    public function getCarac() {
        return $this->carac;
    }

}
