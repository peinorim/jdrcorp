<?php

namespace ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table(name="Fiche")
 * @ORM\Entity(repositoryClass="ElricBundle\Repository\FicheRepository")
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
     * @ORM\OneToOne(targetEntity="ElricBundle\Entity\Perso", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $perso;

    /**
     * @ORM\ManyToOne(targetEntity="IndexBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    public function __construct($perso = null, $user = null) {
        $this->setDate(new \DateTime());
        $this->setPerso($perso);
        $this->setUser($user);
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
     * @param \ElricBundle\Entity\Perso $perso
     */
    public function setPerso($perso) {
        $this->perso = $perso;
    }

    /**
     * @return \ElricBundle\Entity\Perso
     */
    public function getPerso() {
        return $this->perso;
    }

    /**
     * Set user
     *
     * @param \IndexBundle\Entity\User $user
     */
    public function setUser($user) {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return \IndexBundle\Entity\user
     */
    public function getUser() {
        return $this->user;
    }

}
