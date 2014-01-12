<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\FicheRepository")
 */
class Fiche {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToOne(targetEntity="JdrCorp\ElricBundle\Entity\Perso", cascade={"persist"})
     */
    private $perso;

    public function __construct() {
        $this->setDate(new \DateTime());
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Fiche
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * @param JdrCorp\ElricBundle\Entity\Perso $perso
     */
    public function setPerso(JdrCorp\ElricBundle\Entity\Perso $perso) {
        $this->perso = $perso;
    }

    /**
     * @return JdrCorp\ElricBundle\Entity\Perso
     */
    public function getPerso() {
        return $this->perso;
    }

}
