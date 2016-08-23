<?php

namespace ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceMetier
 *
 * @ORM\Table(name="CompetenceMetier")
 * @ORM\Entity(repositoryClass="ElricBundle\Repository\CompetenceMetierRepository")
 */
class CompetenceMetier {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="ElricBundle\Entity\Competence")
     */
    private $competence;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="ElricBundle\Entity\Metier")
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
