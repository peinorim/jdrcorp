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

    public function __construct($request) {
        $this->setNom($request->request->get('nom'));
        $this->setSurnom($request->request->get('surnom'));
        $this->setMaison($request->request->get('maison'));
        $this->setAge($request->request->get('age'));
        $this->setSexe($request->request->get('sexe'));
        $this->setDesc($request->request->get('desc'));

        return $this;
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
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

}
