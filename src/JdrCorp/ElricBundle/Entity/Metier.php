<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\MetierRepository")
 */
class Metier {

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
     * @ORM\Column(name="metier_nom", type="string", length=255)
     */
    private $metierNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="argent_supp", type="integer")
     */
    private $argentSupp;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_contact", type="integer")
     */
    private $nb_contact;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="nb_jet", type="integer")
     */
    private $nb_jet;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set metierNom
     *
     * @param string $metierNom
     * @return Metier
     */
    public function setMetierNom($metierNom) {
        $this->metierNom = $metierNom;

        return $this;
    }

    /**
     * Get metierNom
     *
     * @return string 
     */
    public function getMetierNom() {
        return $this->metierNom;
    }

    /**
     * Set argentSupp
     *
     * @param integer $argentSupp
     * @return Metier
     */
    public function setArgentSupp($argentSupp) {
        $this->argentSupp = $argentSupp;

        return $this;
    }

    /**
     * Get argentSupp
     *
     * @return integer 
     */
    public function getArgentSupp() {
        return $this->argentSupp;
    }

     /**
     * Set nbContact
     *
     * @param integer $nb_contact
     * @return Metier
     */
    public function setNbContact($nb_contact) {
        $this->nb_contact = $nb_contact;

        return $this;
    }

    /**
     * Get nbJet
     *
     * @return integer 
     */
    public function getNbContact() {
        return $this->nb_contact;
    }
    
     /**
     * Set nbJet
     *
     * @param integer $nb_jet
     * @return Metier
     */
    public function setNbJet($nb_jet) {
        $this->nb_jet = $nb_jet;

        return $this;
    }

    /**
     * Get nbJet
     *
     * @return integer 
     */
    public function getNbJet() {
        return $this->nb_jet;
    }

}
