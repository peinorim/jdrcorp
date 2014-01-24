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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Maison")
     */
    private $maison;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\ArtefactType")
     */
    private $type;

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

    public function setCompetence(\JdrCorp\GuildesBundle\Entity\ArtefactType $type) {
        $this->type = $type;
    }

    public function getCompetence() {
        return $this->competence;
    }

}
