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
     * Get Competences
     *
     * @return array 
     */
    public function getComp() {
        $listeCompMetier = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:CompetenceMetier')->findByMetier($this->getId());
        foreach ($listeCompMetier as $compMetier) {
            $allCompMetier[] = $compMetier->getCompetence();
        }
        return $allCompMetier;
    }

}
