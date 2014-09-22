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

}
