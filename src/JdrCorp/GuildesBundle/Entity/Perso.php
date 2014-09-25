<?php

namespace JdrCorp\GuildesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\GuildesBundle\Entity\PersoRepository")
 */
class Perso {

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
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="surnom", type="string")
     */
    private $surnom;

    /**
     * @var string
     *
     * @ORM\Column(name="maison", type="string")
     */
    private $maison;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string")
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text")
     */
    private $desc;

    /**
     * @var integer
     *
     * @ORM\Column(name="agile", type="integer")
     */
    private $agile;

    /**
     * @var integer
     *
     * @ORM\Column(name="fort", type="integer")
     */
    private $fort;

    /**
     * @var integer
     *
     * @ORM\Column(name="res", type="integer")
     */
    private $res;

    /**
     * @var integer
     *
     * @ORM\Column(name="obs", type="integer")
     */
    private $obs;

    /**
     * @var integer
     *
     * @ORM\Column(name="charm", type="integer")
     */
    private $charm;

    /**
     * @var integer
     *
     * @ORM\Column(name="ruse", type="integer")
     */
    private $ruse;

    /**
     * @var integer
     *
     * @ORM\Column(name="savant", type="integer")
     */
    private $savant;

    /**
     * @var integer
     *
     * @ORM\Column(name="tal", type="integer")
     */
    private $tal;

    /**
     * @var integer
     *
     * @ORM\Column(name="guerrier", type="integer")
     */
    private $guerrier;

    /**
     * @var integer
     *
     * @ORM\Column(name="etrange", type="integer")
     */
    private $etrange;

    /**
     * @var integer
     *
     * @ORM\Column(name="guildien", type="integer")
     */
    private $guildien;

    /**
     * @var integer
     *
     * @ORM\Column(name="destin", type="integer")
     */
    private $destin;

    /**
     * @var integer
     *
     * @ORM\Column(name="pv", type="integer")
     */
    private $pv;

    /**
     * @var string
     *
     * @ORM\Column(name="metier", type="string")
     */
    private $metier;

    /**
     * @var array
     *
     * @ORM\Column(name="competences", type="array")
     */
    private $competences;

    /**
     * @var array
     *
     * @ORM\Column(name="armes", type="array")
     */
    private $armes;

    /**
     * @var array
     *
     * @ORM\Column(name="armures", type="array")
     */
    private $armures;

    /**
     * @var array
     *
     * @ORM\Column(name="loom", type="array")
     */
    private $loom;

    /**
     * @var array
     *
     * @ORM\Column(name="competencesCpg", type="array")
     */
    protected $competencesCpg;

    public function __construct($request) {
        $this->setNom($request->request->get('nom'));
        $this->setSurnom($request->request->get('surnom'));
        $this->setMaison($request->request->get('maison'));
        $this->setAge($request->request->get('age'));
        $this->setSexe($request->request->get('sexe'));
        $this->setDesc($request->request->get('desc'));
        $this->setAgile($request->request->get('agile'));
        $this->setFort($request->request->get('fort'));
        $this->setRes($request->request->get('res'));
        $this->setObs($request->request->get('obs'));
        $this->setCharm($request->request->get('charm'));
        $this->setSavant($request->request->get('ruse'));
        $this->setRuse($request->request->get('savant'));
        $this->setTal($request->request->get('tal'));
        $this->setGuerrier($request->request->get('guerrier'));
        $this->setEtrange($request->request->get('etrange'));
        $this->setGuildien($request->request->get('guildien'));
        $this->setDestin($request->request->get('destin'));
        $this->setPv($this->res * 2);

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
     * Set nom
     *
     * @param string $nom
     * @return Perso
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
     * Set surnom
     *
     * @param string $surnom
     * @return Perso
     */
    public function setSurnom($surnom) {
        $this->surnom = $surnom;
        return $this;
    }

    /**
     * Get surnom
     *
     * @return string 
     */
    public function getSurnom() {
        return $this->surnom;
    }

    /**
     * Set maison
     *
     * @param string $maison
     * @return Perso
     */
    public function setMaison($maison) {
        $this->maison = $maison;
        return $this;
    }

    /**
     * Get maison
     *
     * @return string 
     */
    public function getMaison() {
        return $this->maison;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Perso
     */
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Perso
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Perso
     */
    public function setDesc($desc) {
        $this->desc = $desc;
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc() {
        return $this->desc;
    }

    /**
     * Set agile
     *
     * @param integer $agile
     * @return Perso
     */
    public function setAgile($agile) {
        $this->agile = $agile;
        return $this;
    }

    /**
     * Get agile
     *
     * @return integer 
     */
    public function getAgile() {
        return $this->agile;
    }

    /**
     * Set obs
     *
     * @param integer $obs
     * @return Perso
     */
    public function setObs($obs) {
        $this->obs = $obs;
        return $this;
    }

    /**
     * Get obs
     *
     * @return integer 
     */
    public function getObs() {
        return $this->obs;
    }

    /**
     * Set fort
     *
     * @param integer $fort
     * @return Perso
     */
    public function setFort($fort) {
        $this->fort = $fort;
        return $this;
    }

    /**
     * Get fort
     *
     * @return integer 
     */
    public function getFort() {
        return $this->fort;
    }

    /**
     * Set res
     *
     * @param integer $res
     * @return Perso
     */
    public function setRes($res) {
        $this->res = $res;
        return $this;
    }

    /**
     * Get res
     *
     * @return integer 
     */
    public function getRes() {
        return $this->res;
    }

    /**
     * Set charm
     *
     * @param integer $charm
     * @return Perso
     */
    public function setCharm($charm) {
        $this->charm = $charm;
        return $this;
    }

    /**
     * Get charm
     *
     * @return integer 
     */
    public function getCharm() {
        return $this->charm;
    }

    /**
     * Set ruse
     *
     * @param integer $ruse
     * @return Perso
     */
    public function setRuse($ruse) {
        $this->ruse = $ruse;
        return $this;
    }

    /**
     * Get ruse
     *
     * @return integer 
     */
    public function getRuse() {
        return $this->ruse;
    }

    /**
     * Set savant
     *
     * @param integer $savant
     * @return Perso
     */
    public function setSavant($savant) {
        $this->savant = $savant;
        return $this;
    }

    /**
     * Get savant
     *
     * @return integer 
     */
    public function getSavant() {
        return $this->savant;
    }

    /**
     * Set tal
     *
     * @param integer $tal
     * @return Perso
     */
    public function setTal($tal) {
        $this->tal = $tal;
        return $this;
    }

    /**
     * Get tal
     *
     * @return integer 
     */
    public function getTal() {
        return $this->tal;
    }

    /**
     * Set guerrier
     *
     * @param integer $guerrier
     * @return Perso
     */
    public function setGuerrier($guerrier) {
        $this->guerrier = $guerrier;
        return $this;
    }

    /**
     * Get guerrier
     *
     * @return integer 
     */
    public function getGuerrier() {
        return $this->guerrier;
    }

    /**
     * Set etrange
     *
     * @param integer $etrange
     * @return Perso
     */
    public function setEtrange($etrange) {
        $this->etrange = $etrange;
        return $this;
    }

    /**
     * Get etrange
     *
     * @return integer 
     */
    public function getEtrange() {
        return $this->etrange;
    }

    /**
     * Set guildien
     *
     * @param integer $guildien
     * @return Perso
     */
    public function setGuildien($guildien) {
        $this->guildien = $guildien;
        return $this;
    }

    /**
     * Get guildien
     *
     * @return integer 
     */
    public function getGuildien() {
        return $this->guildien;
    }

    /**
     * Set destin
     *
     * @param integer $destin
     * @return Perso
     */
    public function setDestin($destin) {
        $this->destin = $destin;
        return $this;
    }

    /**
     * Get destin
     *
     * @return integer 
     */
    public function getDestin() {
        return $this->destin;
    }

    /**
     * Set pv
     *
     * @param integer $pv
     * @return Perso
     */
    public function setPv($pv) {
        $this->pv = $pv;
        return $this;
    }

    /**
     * Get pv
     *
     * @return integer 
     */
    public function getPv() {
        return $this->pv;
    }

    /**
     * Set Comp
     *
     * @return Perso 
     */
    public function setCompetences($comp) {
        $this->competences = $comp;
        return $this;
    }

    /**
     * Get Comp
     *
     * @return array 
     */
    public function getCompetences() {
        return $this->competences;
    }

    /**
     * Set armes
     *
     * @return Perso 
     */
    public function setArmes($armes) {
        $this->armes = $armes;
        return $this;
    }

    /**
     * Get armes
     *
     * @return array 
     */
    public function getArmes() {
        return $this->armes;
    }

    /**
     * Set armures
     *
     * @return Perso 
     */
    public function setArmures($armures) {
        $this->armures = $armures;
        return $this;
    }

    /**
     * Get armures
     *
     * @return array 
     */
    public function getArmures() {
        return $this->armures;
    }

    /**
     * Set Loom
     *
     * @return Perso 
     */
    public function setLoom($loom) {
        $this->loom = $loom;
        return $this;
    }

    /**
     * Get Loom
     *
     * @return array 
     */
    public function getLoom() {
        return $this->loom;
    }

    /**
     * Set CompCpg
     *
     * @return Perso 
     */
    public function setCompetencesCpg($comp) {
        $this->competencesCpg = $comp;
        return $this;
    }

    /**
     * Get Comp
     *
     * @return array 
     */
    public function getCompetencesCpg() {
        return $this->competencesCpg;
    }

    /**
     * Set metier
     *
     * @param string $metier
     * @return Perso
     */
    public function setMetier($metier) {
        $this->metier = $metier;
        return $this;
    }

    /**
     * Get metier
     *
     * @return string 
     */
    public function getMetier() {
        return $this->metier;
    }

}
