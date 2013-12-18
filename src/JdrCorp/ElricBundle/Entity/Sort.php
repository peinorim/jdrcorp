<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sort
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\SortRepository")
 */
class Sort {

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
     * @ORM\Column(name="sort_nom", type="string", length=255)
     */
    private $sortNom;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set sortNom
     *
     * @param string $sortNom
     * @return Sort
     */
    public function setSortNom($sortNom) {
        $this->sortNom = $sortNom;

        return $this;
    }

    /**
     * Get sortNom
     *
     * @return string 
     */
    public function getSortNom() {
        return $this->sortNom;
    }

    /**
     * Get metiers
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getMetiers() {
        return $this->metiers;
    }

}
