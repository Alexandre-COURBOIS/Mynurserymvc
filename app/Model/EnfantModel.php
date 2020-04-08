<?php


namespace App\Model;


use App\Weblitzer\Model;
use App\App;

class EnfantModel extends Model
{
    protected static $table = 'nurs_enfant';
    protected $id_enfant;
    protected $id_responsablelegal;
    protected $nom;
    protected $prenom;
    protected $birthdate;
    protected $sexe;
    protected $created_at;
    protected $modified_at;


    public function getId_enfant()
    {
        return $this->id_enfant;
    }
    public function setId_enfant($id_enfant){
        $this->id_enfant = $id_enfant;
    }
    public function getId_responsablelegal()
    {
        return $this->id_responsablelegal;
    }
    public function setId_responsablelegal($id_responsablelegal){
        $this->id_responsablelegal = $id_responsablelegal;
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
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
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

    public static function insert($id_responsablelegal, $nom, $prenom, $birthdate, $sexe)
    {
        $sql = "INSERT INTO " . self::getTable() . " VALUES (NULL, ?, ?, ?, ?, ?, NOW(), NULL, ?)";
        return App::getDatabase()->prepareInsert($sql,[$id_responsablelegal, $nom, $prenom, $birthdate, $sexe, $id_responsablelegal]);
    }

    public static function edit($sexe, $nom, $prenom, $birthdate, $id){
        $sql = "UPDATE " . self::getTable() . " SET nom = ?, prenom = ?, birthdate = ?, sexe = ?, modified_at = NOW() WHERE id_enfant = ?";
        return App::getDatabase()->prepareInsert($sql, [$sexe, $nom, $prenom, $birthdate, $id]);
    }

}