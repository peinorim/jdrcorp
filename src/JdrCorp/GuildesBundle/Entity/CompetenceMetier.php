<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceMetier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\CompetenceMetierRepository")
 */
class CompetenceMetier {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Competence")
     */
    private $competence;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Metier")
     */
    private $metier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="apprenti", type="boolean")
     */
    private $apprenti;

    // Getter et setter pour l'entité Metier
    public function setMetier(\JdrCorp\GuildesBundle\Entity\Metier $metier) {
        $this->metier = $metier;
    }

    public function getMetier() {
        return $this->metier;
    }

    // Getter et setter pour l'entité Competence
    public function setCompetence(\JdrCorp\GuildesBundle\Entity\Competence $competence) {
        $this->competence = $competence;
    }

    public function getCompetence() {
        return $this->competence;
    }

    /**
     * Set apprenti
     *
     * @param boolean $apprenti
     * @return CompetenceMetier
     */
    public function setApprenti($apprenti) {
        $this->apprenti = $apprenti;

        return $this;
    }

    /**
     * Get apprenti
     *
     * @return boolean 
     */
    public function getApprenti() {
        return $this->apprenti;
    }

}
