<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artefact
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\ArtefactRepository")
 */
class Artefact {

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Maison")
     */
    private $maison;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\ArtefactType")
     */
    private $type;

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
     * @return Artefact
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

    public function setMaison(\JdrCorp\GuildesBundle\Entity\Maison $maison) {
        $this->maison = $maison;
    }

    public function getMaison() {
        return $this->maison;
    }

    public function setType(\JdrCorp\GuildesBundle\Entity\ArtefactType $type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

}
