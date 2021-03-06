<?php

namespace ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perso
 *
 * @ORM\Table(name="Perso")
 * @ORM\Entity(repositoryClass="ElricBundle\Repository\PersoRepository")
 */
class Perso {

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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="proprio", type="string", length=50)
     */
    protected $proprio;

    /**
     * @var integer
     *
     * @ORM\Column(name="fort", type="integer")
     */
    protected $fort;

    /**
     * @var integer
     *
     * @ORM\Column(name="consti", type="integer")
     */
    protected $consti;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    protected $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="intell", type="integer")
     */
    protected $intell;

    /**
     * @var integer
     *
     * @ORM\Column(name="pouvoir", type="integer")
     */
    protected $pouvoir;

    /**
     * @var integer
     *
     * @ORM\Column(name="dexte", type="integer")
     */
    protected $dexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="apparence", type="integer")
     */
    protected $apparence;

    /**
     * @var string
     *
     * @ORM\Column(name="naiss", type="string", length=50)
     */
    protected $naiss;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1)
     */
    protected $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    protected $age;

    /**
     * @var string
     *
     * @ORM\Column(name="allure", type="string", length=100)
     */
    protected $allure;

    /**
     * @var array
	 
     * @ORM\Column(name="competences", type="array")
     */
    protected $competences;

    /**
     * @var array
	 
     * @ORM\Column(name="sorts", type="array")
     */
    protected $sorts;

    /**
     * @var string
     *
     * @ORM\Column(name="metier", type="string", length=50)
     */
    protected $metier;

    /**
     * @var array
     *
     * @ORM\Column(name="armes", type="array")
     */
    protected $armes;

    /**
     * @var array
     *
     * @ORM\Column(name="armure", type="array")
     */
    protected $armure;

    /**
     * @var integer
     *
     * @ORM\Column(name="idee", type="integer")
     */
    protected $idee;

    /**
     * @var integer
     *
     * @ORM\Column(name="chance", type="integer")
     */
    protected $chance;

    /**
     * @var integer
     *
     * @ORM\Column(name="dexterite", type="integer")
     */
    protected $dexterite;

    /**
     * @var integer
     *
     * @ORM\Column(name="charisme", type="integer")
     */
    protected $charisme;

    /**
     * @var string
     *
     * @ORM\Column(name="modif_degats", type="string")
     */
    protected $modif_degats;

    /**
     * @var integer
     *
     * @ORM\Column(name="pv", type="integer")
     */
    protected $pv;

    /**
     * @var integer
     *
     * @ORM\Column(name="mana", type="integer")
     */
    protected $mana;
	
	/**
     * @var array
     *
     * @ORM\Column(name="comp_tot", type="array")
     */
    protected $comp_tot;

    public function __construct($request) {
        $this->setNom($request->request->get('nom'));
        $this->setProprio($request->request->get('proprio'));
        $this->setFort($request->request->get('force'));
        $this->setConsti($request->request->get('consti'));
        $this->setTaille($request->request->get('taille'));
        $this->setintell($request->request->get('intell'));
        $this->setPouvoir($request->request->get('pouvoir'));
        $this->setDexte($request->request->get('dexte'));
        $this->setApparence($request->request->get('appa'));
        $this->setAllure($request->request->get('allure'));
        $this->setNaiss($request->request->get('naiss'));
        $this->setSexe($request->request->get('sexe'));
        $this->setAge($request->request->get('age'));
        $this->setMetier($request->request->get('metier'));
        $this->setPv();
        $this->setMana();
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
     * Set nom
     *
     * @param string $proprio
     * @return Perso
     */
    public function setProprio($proprio) {
        $this->proprio = $proprio;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getProprio() {
        return $this->proprio;
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
     * Set consti
     *
     * @param integer $consti
     * @return Perso
     */
    public function setConsti($consti) {
        $this->consti = $consti;

        return $this;
    }

    /**
     * Get consti
     *
     * @return integer 
     */
    public function getConsti() {
        return $this->consti;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Perso
     */
    public function setTaille($taille) {
        $this->taille = $taille;
        $this->setModifDegats();

        return $this;
    }

    /**
     * Set modif_degats
     *
     * @param integer $taille
     * @return Perso
     */
    public function setModifDegats() {
        $modif = $this->fort + $this->taille;
        if ($modif >= 2 && $modif <= 12) {
            $this->modif_degats = "-1D6";
        } else if ($modif >= 13 && $modif <= 16) {
            $this->modif_degats = "-1D4";
        } else if ($modif >= 17 && $modif <= 24) {
            $this->modif_degats = "0";
        } else if ($modif >= 25 && $modif <= 32) {
            $this->modif_degats = "+1D4";
        } else if ($modif >= 33 && $modif <= 40) {
            $this->modif_degats = "-1D6";
        } else if ($modif >= 41 && $modif <= 56) {
            $this->modif_degats = "+2D6";
        } else if ($modif >= 57 && $modif <= 72) {
            $this->modif_degats = "+3D6";
        } else if ($modif >= 73 && $modif <= 88) {
            $this->modif_degats = "+4D6";
        } else if ($modif >= 89 && $modif <= 104) {
            $this->modif_degats = "+5D6";
        } else if ($modif >= 105 && $modif <= 120) {
            $this->modif_degats = "+6D6";
        } else if ($modif >= 121 && $modif <= 136) {
            $this->modif_degats = "+7D6";
        } else if ($modif >= 137 && $modif <= 152) {
            $this->modif_degats = "+8D6";
        } else if ($modif >= 153 && $modif <= 168) {
            $this->modif_degats = "+9D6";
        } else if ($modif >= 169 && $modif <= 184) {
            $this->modif_degats = "+10D6";
        }
        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getModifDegats() {
        return $this->modif_degats;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille() {
        return $this->taille;
    }

    /**
     * Set intell
     *
     * @param integer $intell
     * @return Perso
     */
    public function setIntell($intell) {
        $this->intell = $intell;
        $this->setIdee();

        return $this;
    }

    /**
     * Get intell
     *
     * @return integer 
     */
    public function getIntell() {
        return $this->intell;
    }

    /**
     * Set pouvoir
     *
     * @param integer $pouvoir
     * @return Perso
     */
    public function setPouvoir($pouvoir) {
        $this->pouvoir = $pouvoir;
        $this->setChance();

        return $this;
    }

    /**
     * Get pouvoir
     *
     * @return integer 
     */
    public function getPouvoir() {
        return $this->pouvoir;
    }

    /**
     * Set dexte
     *
     * @param integer $dexte
     * @return Perso
     */
    public function setDexte($dexte) {
        $this->dexte = $dexte;
        $this->setDexterite();

        return $this;
    }

    /**
     * Get dexte
     *
     * @return integer 
     */
    public function getDexte() {
        return $this->dexte;
    }

    /**
     * Set apparence
     *
     * @param integer $apparence
     * @return Perso
     */
    public function setApparence($apparence) {
        $this->apparence = $apparence;
        $this->setCharisme();
        return $this;
    }

    /**
     * Get apparence
     *
     * @return integer 
     */
    public function getApparence() {
        return $this->apparence;
    }

    /**
     * Set naiss
     *
     * @param string $naiss
     * @return Perso
     */
    public function setNaiss($naiss) {
        $this->naiss = $naiss;

        return $this;
    }

    /**
     * Get naiss
     *
     * @return string 
     */
    public function getNaiss() {
        return $this->naiss;
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
     * Set age
     *
     * @param integer $age
     * @return Perso
     */
    public function setAge($age) {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set allure
     *
     * @param string $allure
     * @return Perso
     */
    public function setAllure($allure) {
        $this->allure = $allure;

        return $this;
    }

    /**
     * Get allure
     *
     * @return string 
     */
    public function getAllure() {
        return $this->allure;
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
     * Set sorts
     *
     * @param array $sorts
     * @return Perso
     */
    public function setSorts($sorts) {
        $this->sorts = $sorts;

        return $this;
    }

    /**
     * Get sorts
     *
     * @return array 
     */
    public function getSorts() {
        return $this->sorts;
    }

    /**
     * Set metier
     *
     * @param integer $metier_id
     * @return Perso
     */
    public function setMetier($metier_id) {
        $this->metier = $metier_id;
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

    /**
     * Set armes
     *
     * @param array $armes
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
     * Set armure
     *
     * @param array $armure
     * @return Perso
     */
    public function setArmure($armure) {
        $this->armure = $armure;

        return $this;
    }

    /**
     * Get armure
     *
     * @return array 
     */
    public function getArmure() {
        return $this->armure;
    }

    /**
     * Get idee
     *
     * @return integer 
     */
    public function getIdee() {
        return $this->idee;
    }

    /**
     * Get chance
     *
     * @return integer 
     */
    public function getChance() {
        return $this->chance;
    }

    /**
     * Get dexterite
     *
     * @return integer 
     */
    public function getDexterite() {
        return $this->dexterite;
    }

    /**
     * Get charisme
     *
     * @return integer 
     */
    public function getCharisme() {
        return $this->idee;
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
     * Get mana
     *
     * @return integer 
     */
    public function getMana() {
        return $this->mana;
    }

    /**
     * Set idee
     *
     * @return Perso 
     */
    public function setIdee() {
        $this->idee = $this->intell * 5;
        return $this;
    }

    /**
     * Set chance
     *
     * @return Perso 
     */
    public function setChance() {
        $this->chance = $this->pouvoir * 5;
        return $this;
    }

    /**
     * Set dexterite
     *
     * @return Perso 
     */
    public function setDexterite() {
        $this->dexterite = $this->dexte * 5;
        return $this;
    }

    /**
     * Set charisme
     *
     * @return Perso 
     */
    public function setCharisme() {
        $this->charisme = $this->apparence * 5;
        return $this;
    }

    /**
     * Set pv
     *
     * @return Perso 
     */
    public function setPv() {
        $this->pv = ceil(($this->consti + $this->taille) / 2);
        return $this;
    }

    /**
     * Set mana
     *
     * @return Perso 
     */
    public function setMana() {
        $this->mana = $this->pouvoir;
        return $this;
    }
	
	/**
     * Set comp_tot
     *
     * @param array $comp_tot
     * @return Perso
     */
    public function setCompTot($comp_tot) {
        $this->comp_tot = $comp_tot;

        return $this;
    }

    /**
     * Get comp_tot
     *
     * @return array 
     */
    public function getCompTot() {
        return $this->comp_tot;
    }

}
