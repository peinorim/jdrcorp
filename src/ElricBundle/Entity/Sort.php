<?php

namespace ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ElricBundle\Entity\Metier;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Sort
 *
 * @ORM\Table(name="Sort")
 * @ORM\Entity(repositoryClass="ElricBundle\Repository\SortRepository")
 */
class Sort {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sort_nom", type="string", length=255)
     */
    protected $sortNom;
	
	/**
    * @ManyToMany(targetEntity="ElricBundle\Entity\Metier", mappedBy="sorts")
    */
    protected $metiers;

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

}
