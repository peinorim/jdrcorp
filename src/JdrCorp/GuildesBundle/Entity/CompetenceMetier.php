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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Competence")
     */
    private $competence;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Metier")
     */
    private $metier;

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

}
