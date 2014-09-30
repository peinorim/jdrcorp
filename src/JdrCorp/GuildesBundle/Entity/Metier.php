<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\MetierRepository")
 */
class Metier {

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Maison")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $maison;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Metier
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set maison
     *
     * @param JdrCorp\GuildesBundle\Entity\Maison $maison
     */
    public function setMaison(\JdrCorp\GuildesBundle\Entity\Maison $maison) {
        $this->maison = $maison;
    }

    /**
     * Get maison
     *
     * @return JdrCorp\GuildesBundle\Entity\Maison
     */
    public function getMaison() {
        return $this->maison;
    }

}
