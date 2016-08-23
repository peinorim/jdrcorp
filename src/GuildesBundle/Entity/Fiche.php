<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Fiche
 *
 * @ORM\Table(name="Fiche")
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\FicheRepository")
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
     * @ORM\OneToOne(targetEntity="GuildesBundle\Entity\Perso", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $perso;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    public function __construct($perso = null, $userID = null) {
        $this->setDate(new \DateTime());
        $this->setPerso($perso);
        $this->setUserId($userID);
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
     * @param Perso $perso
     */
    public function setPerso($perso) {
        $this->perso = $perso;
    }

    /**
     * @return Perso
     */
    public function getPerso() {
        return $this->perso;
    }

    /**
     * Set userId
     *
     * @param integer
     */
    public function setUserId($userID) {
        $this->userId = $userID;
    }

    /**
     * Get article
     *
     * @return integer
     */
    public function getUserId() {
        return $this->userId;
    }

}
