<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceMetier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\CompetenceMetierRepository")
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
     * @ORM\ManyToOne(targetEntity="JdrCorp\ElricBundle\Entity\Competence")
     */
    private $competence;

    /**
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
