<?php

namespace ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Metier
 *
 * @ORM\Table(name="Metier")
 * @ORM\Entity(repositoryClass="ElricBundle\Repository\MetierRepository")
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
     * @ManyToMany(targetEntity="Sort")
     * @JoinTable(name="SortMetier",
     *      joinColumns={@JoinColumn(name="metier_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="sort_id", referencedColumnName="id")}
     *      )
     */
    private $sorts;
	
	public function __construct()
    {
        $this->sorts = new \Doctrine\Common\Collections\ArrayCollection();
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
	
	/**
     * Get sorts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSorts()
    {
        return $this->sorts;
    }

}
