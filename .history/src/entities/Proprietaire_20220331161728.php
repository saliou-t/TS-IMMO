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
     * @ORM\Column(type="string")
     */
    protected $nom;

     /**
     * @ORM\Column(type="string")
     */
    protected $prenom;

     /**
     * @var string
     */
    protected $adresse;

     /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
    */
    protected $CNI;



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

}