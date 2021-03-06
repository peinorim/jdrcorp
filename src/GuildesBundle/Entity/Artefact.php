<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artefact
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\ArtefactRepository")
 */
class Artefact {

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
     * @ORM\ManyToOne(targetEntity="GuildesBundle\Entity\Maison")
     */
    protected $maison;

    /**
     * @ORM\ManyToOne(targetEntity="GuildesBundle\Entity\ArtefactType")
     */
    protected $type;

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

    public function setMaison(\GuildesBundle\Entity\Maison $maison) {
        $this->maison = $maison;
    }

    public function getMaison() {
        return $this->maison;
    }

    public function setType(\GuildesBundle\Entity\ArtefactType $type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

}
