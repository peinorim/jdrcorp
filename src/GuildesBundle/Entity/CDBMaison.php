<?php

namespace GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CDBMaison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GuildesBundle\Repository\CDBMaisonRepository")
 */
class CDBMaison {

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
     * @ORM\Column(name="titre", type="text")
     */
    protected $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="cdb", type="text")
     */
    protected $cdb;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="text")
     */
    protected $effet;

    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="text")
     */
    protected $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_effet", type="text")
     */
    protected $mesEffet;

    /**
     * @ORM\ManyToOne(targetEntity="GuildesBundle\Entity\Maison")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $maison;

    /**
     * Set maison
     *
     * @param Maison $maison
     */
    public function setMaison(Maison $maison) {
        $this->maison = $maison;
    }

    /**
     * Get maison
     *
     * @return Maison
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
