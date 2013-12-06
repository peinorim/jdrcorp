<?php

namespace JdrCorp\ElricBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JdrCorp\ElricBundle\Entity\PersoRepository")
 */
class Perso
{
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="fort", type="integer")
     */
    private $fort;

    /**
     * @var integer
     *
     * @ORM\Column(name="consti", type="integer")
     */
    private $consti;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="intell", type="integer")
     */
    private $intell;

    /**
     * @var integer
     *
     * @ORM\Column(name="pouvoir", type="integer")
     */
    private $pouvoir;

    /**
     * @var integer
     *
     * @ORM\Column(name="dexte", type="integer")
     */
    private $dexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="apparence", type="integer")
     */
    private $apparence;

    /**
     * @var string
     *
     * @ORM\Column(name="naiss", type="string", length=50)
     */
    private $naiss;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1)
     */
    private $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="allure", type="string", length=100)
     */
    private $allure;

    /**
     * @var array
     *
     * @ORM\Column(name="competences", type="array")
     */
    private $competences;

    /**
     * @var array
     *
     * @ORM\Column(name="sorts", type="array")
     */
    private $sorts;

    /**
     * @var string
     *
     * @ORM\Column(name="metier", type="string", length=50)
     */
    private $metier;

    /**
     * @var array
     *
     * @ORM\Column(name="armes", type="array")
     */
    private $armes;

    /**
     * @var array
     *
     * @ORM\Column(name="armure", type="array")
     */
    private $armure;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Perso
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set fort
     *
     * @param integer $fort
     * @return Perso
     */
    public function setFort($fort)
    {
        $this->fort = $fort;
    
        return $this;
    }

    /**
     * Get fort
     *
     * @return integer 
     */
    public function getFort()
    {
        return $this->fort;
    }

    /**
     * Set consti
     *
     * @param integer $consti
     * @return Perso
     */
    public function setConsti($consti)
    {
        $this->consti = $consti;
    
        return $this;
    }

    /**
     * Get consti
     *
     * @return integer 
     */
    public function getConsti()
    {
        return $this->consti;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Perso
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    
        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set intell
     *
     * @param integer $intell
     * @return Perso
     */
    public function setIntell($intell)
    {
        $this->intell = $intell;
    
        return $this;
    }

    /**
     * Get intell
     *
     * @return integer 
     */
    public function getIntell()
    {
        return $this->intell;
    }

    /**
     * Set pouvoir
     *
     * @param integer $pouvoir
     * @return Perso
     */
    public function setPouvoir($pouvoir)
    {
        $this->pouvoir = $pouvoir;
    
        return $this;
    }

    /**
     * Get pouvoir
     *
     * @return integer 
     */
    public function getPouvoir()
    {
        return $this->pouvoir;
    }

    /**
     * Set dexte
     *
     * @param integer $dexte
     * @return Perso
     */
    public function setDexte($dexte)
    {
        $this->dexte = $dexte;
    
        return $this;
    }

    /**
     * Get dexte
     *
     * @return integer 
     */
    public function getDexte()
    {
        return $this->dexte;
    }

    /**
     * Set apparence
     *
     * @param integer $apparence
     * @return Perso
     */
    public function setApparence($apparence)
    {
        $this->apparence = $apparence;
    
        return $this;
    }

    /**
     * Get apparence
     *
     * @return integer 
     */
    public function getApparence()
    {
        return $this->apparence;
    }

    /**
     * Set naiss
     *
     * @param string $naiss
     * @return Perso
     */
    public function setNaiss($naiss)
    {
        $this->naiss = $naiss;
    
        return $this;
    }

    /**
     * Get naiss
     *
     * @return string 
     */
    public function getNaiss()
    {
        return $this->naiss;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Perso
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Perso
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set allure
     *
     * @param string $allure
     * @return Perso
     */
    public function setAllure($allure)
    {
        $this->allure = $allure;
    
        return $this;
    }

    /**
     * Get allure
     *
     * @return string 
     */
    public function getAllure()
    {
        return $this->allure;
    }

    /**
     * Set competences
     *
     * @param array $competences
     * @return Perso
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;
    
        return $this;
    }

    /**
     * Get competences
     *
     * @return array 
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Set sorts
     *
     * @param array $sorts
     * @return Perso
     */
    public function setSorts($sorts)
    {
        $this->sorts = $sorts;
    
        return $this;
    }

    /**
     * Get sorts
     *
     * @return array 
     */
    public function getSorts()
    {
        return $this->sorts;
    }

    /**
     * Set metier
     *
     * @param string $metier
     * @return Perso
     */
    public function setMetier($metier)
    {
        $this->metier = $metier;
    
        return $this;
    }

    /**
     * Get metier
     *
     * @return string 
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Set armes
     *
     * @param array $armes
     * @return Perso
     */
    public function setArmes($armes)
    {
        $this->armes = $armes;
    
        return $this;
    }

    /**
     * Get armes
     *
     * @return array 
     */
    public function getArmes()
    {
        return $this->armes;
    }

    /**
     * Set armure
     *
     * @param array $armure
     * @return Perso
     */
    public function setArmure($armure)
    {
        $this->armure = $armure;
    
        return $this;
    }

    /**
     * Get armure
     *
     * @return array 
     */
    public function getArmure()
    {
        return $this->armure;
    }
}
