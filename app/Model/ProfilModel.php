<?php


namespace App\Model;


use App\Weblitzer\Model;
use App\App;

class ProfilModel extends Model
{
    protected static $table = 'nurs_responsable_legal_enfant';
    protected $idresponsable_legale;
    protected $nom;
    protected $prenom;
    protected $birthdate;
    protected $email;
    protected $telephone;
    protected $num_rue;
    protected $supp_rue;
    protected $nom_rue;
    protected $codepostal;
    protected $ville;
    protected $sexe;
    protected $created_at;
    protected $modified_at;


    public function getId()
    {
        return $this->idresponsable_legale;
    }
    public function setId($idresponsable_legale){
        $this->idresponsable_legale = $idresponsable_legale;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function setnom($nom)
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
    public function getbirthdate()
    {
        return $this->birthdate;
    }
    public function setbirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function gettelephone()
    {
        return $this->telephone;
    }
    public function settelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getNumRue()
    {
        return $this->num_rue;
    }
    public function setNumRue($num_rue)
    {
        $this->num_rue = $num_rue;
    }
    public function getSuppRue()
    {
        return $this->supp_rue;
    }
    public function setSuppRue($supp_rue)
    {
        $this->supp_rue = $supp_rue;
    }
    public function getnomRue()
    {
        return $this->nom_rue;
    }
    public function setnomRue($nom_rue)
    {
        $this->nom_rue = $nom_rue;
    }
    public function getcodepostal()
    {
        return $this->codepostal;
    }
    public function setCodePosal($codepostal)
    {
        $this->codepostal = $codepostal;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    public function getcreated_at()
    {
        return $this->created_at;
    }
    public function setcreated_at($created_at)
    {
        $this->created_at = $created_at;
    }
    public function getModifieddAt()
    {
        return $this->modified_at;
    }
    public function setmodified_at($mofidiedAt)
    {
        $this->modified_at = $mofidiedAt;
    }

}