<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceMetier
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CompetenceMetier {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="JdrCorp\ElricBundle\Entity\Competence")
     */
    private $competence;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="JdrCorp\ElricBundle\Entity\Metier")
     */
    private $metier;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function getCompetence() {
        return $this->competence;
    }

    public function getMetier() {
        return $this->metier;
    }

}
