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
    protected $longitude;
    protected $latitude;
    protected $created_at;
    protected $modified_at;


    public function getId()
    {
        return $this->idresponsable_legale;
    }
    public function setId($idresponsable_legale){
        $this->idresponsable_legale = $idresponsable_legale;
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
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function setBirthdate($birthdate)
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
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getNum_rue()
    {
        return $this->num_rue;
    }
    public function setNum_rue($num_rue)
    {
        $this->num_rue = $num_rue;
    }
    public function getSupp_rue()
    {
        return $this->supp_rue;
    }
    public function setSupp_rue($supp_rue)
    {
        $this->supp_rue = $supp_rue;
    }
    public function getNom_rue()
    {
        return $this->nom_rue;
    }
    public function setNom_rue($nom_rue)
    {
        $this->nom_rue = $nom_rue;
    }
    public function getCodepostal()
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
    public function getLongitude()
    {
        return $this->longitude;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }
    public function getModifieddAt()
    {
        return $this->modified_at;
    }
    public function setModified_at($mofidiedAt)
    {
        $this->modified_at = $mofidiedAt;
    }

    public static function edit($tel, $numRue, $supp_rue, $street, $codePostal, $ville, $longitude, $latitude, $id){
        $sql = "UPDATE " . self::getTable() . " SET telephone = ?, num_rue = ?, supp_rue = ?, nom_rue = ?, codepostal = ?, ville = ?, longitude = ?, latitude = ?, modified_at = NOW() WHERE idresponsable_legale = ?";
        return App::getDatabase()->prepareInsert($sql, [$tel, $numRue, $supp_rue, $street, $codePostal, $ville, $longitude, $latitude, $id]);
    }
}