<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceMetier
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SortMetier {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="JdrCorp\ElricBundle\Entity\Sort")
     */
    private $sort;

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

    public function getSort() {
        return $this->sort;
    }

    public function getMetier() {
        return $this->metier;
    }

}
