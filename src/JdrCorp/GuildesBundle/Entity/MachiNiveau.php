<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MachiNiveau
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\MachiNiveauRepository")
 */
class MachiNiveau {

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
     * @ORM\Column(name="niveau", type="string", length=20)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Machination")
     * @ORM\JoinColumn(nullable=false)
     */
    private $machination;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
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
     * Set description
     *
     * @param string $description
     * @return MachiNiveau
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
     * Set machination
     *
     * @param string $machination
     * @return MachiNiveau
     */
    public function setMachination($machination) {
        $this->machination = $machination;

        return $this;
    }

    /**
     * Get description
     *
     * @return Machination 
     */
    public function getMachination() {
        return $this->machination;
    }

}
