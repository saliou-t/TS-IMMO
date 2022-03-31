<?php
// src/Product.php
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaires")
 */
class Proprietaire
{
   /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false, length=25)
     */
    protected $nom;

     /**
     * @ORM\Column(type="string", nullable=false, length=25)
     */
    protected $prenom;

     /**
     * @ORM\Column(type="string", nullable=false, length=225)
     */
    protected $adresse;

     /**
     * @ORM\Column(type="string", nullable=false, length=15, unique=true)
     */
    protected $telephone;

    /**
     * @ORM\Column(type="string", nullable=false, length=16)
     */
    protected $CNI;

    /**
     * @ORM\Column(type="string", nullable=false, length=16)
     */
    protected $email;


    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getCNI()
    {
        return $this->CNI;
    }

    public function setCNI($cni)
    {
        $this->CNI = $cni;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($cni)
    {
        $this->email = $email;
    }

}