<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CDBMaison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\CDBMaisonRepository")
 */
class CDBMaison {

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
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="cdb", type="text")
     */
    private $cdb;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="text")
     */
    private $effet;

    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="text")
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_effet", type="text")
     */
    private $mesEffet;

    /**
     * @ORM\ManyToOne(targetEntity="JdrCorp\GuildesBundle\Entity\Maison")
     * @ORM\JoinColumn(nullable=false)
     */
    private $maison;

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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return CDBMaison
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set cdb
     *
     * @param string $cdb
     * @return CDBMaison
     */
    public function setCdb($cdb) {
        $this->cdb = $cdb;

        return $this;
    }

    /**
     * Get cdb
     *
     * @return string 
     */
    public function getCdb() {
        return $this->cdb;
    }

    /**
     * Set effet
     *
     * @param string $effet
     * @return CDBMaison
     */
    public function setEffet($effet) {
        $this->effet = $effet;

        return $this;
    }

    /**
     * Get effet
     *
     * @return string 
     */
    public function getEffet() {
        return $this->effet;
    }

    /**
     * Set mes
     *
     * @param string $mes
     * @return CDBMaison
     */
    public function setMes($mes) {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string 
     */
    public function getMes() {
        return $this->mes;
    }

    /**
     * Set mesEffet
     *
     * @param string $mesEffet
     * @return CDBMaison
     */
    public function setMesEffet($mesEffet) {
        $this->mesEffet = $mesEffet;

        return $this;
    }

    /**
     * Get mesEffet
     *
     * @return string 
     */
    public function getMesEffet() {
        return $this->mesEffet;
    }

}
