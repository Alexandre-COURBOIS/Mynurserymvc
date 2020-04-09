<?php


namespace App\Model;


use App\Weblitzer\Model;
use App\App;

class AutreResponsableLegalModel extends Model
{
    protected static $table = 'nurs_autre_responsable';
    protected $id_autre_responsable;
    protected $id_enfant;
    protected $nom_autre_respons;
    protected $prenom_autre_respons;
    protected $role_autre_respons;
    protected $created_at;
    protected $modified_at;

    public function getId_autre_responsable()
    {
        return $this->id_autre_responsable;
    }

    public function setId_autre_responsable($id_autre_responsable)
    {
        $this->id_autre_responsable = $id_autre_responsable;
    }
    public function getId_enfant()
    {
        return $this->id_enfant;
    }

    public function setId_enfant($id_enfant)
    {
        $this->id_enfant = $id_enfant;
    }
    public function getNom_autre_respons()
    {
        return $this->nom_autre_respons;
    }

    public function setNom_autre_respons($nom_autre_respons)
    {
        $this->nom_autre_respons = $nom_autre_respons;
    }
    public function getPrenom_autre_respons()
    {
        return $this->prenom_autre_respons;
    }

    public function setPrenom_autre_respons($prenom_autre_respons)
    {
        $this->prenom_autre_respons = $prenom_autre_respons;
    }
    public function getRole_autre_respons()
    {
        return $this->role_autre_respons;
    }

    public function setRole_autre_respons($role_autre_respons)
    {
        $this->role_autre_respons = $role_autre_respons;
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
    /*
    public static function insert($id_responsablelegal, $nom, $prenom, $birthdate, $sexe)
    {
        $sql = "INSERT INTO " . self::getTable() . " VALUES (NULL, ?, ?, ?, ?, ?, NOW(), NULL, ?)";
        return App::getDatabase()->prepareInsert($sql, [$id_responsablelegal, $nom, $prenom, $birthdate, $sexe, $id_responsablelegal]);
    }

    public static function edit($sexe, $nom, $prenom, $birthdate, $id)
    {
        $sql = "UPDATE " . self::getTable() . " SET nom = ?, prenom = ?, birthdate = ?, sexe = ?, modified_at = NOW() WHERE id_enfant = ?";
        return App::getDatabase()->prepareInsert($sql, [$sexe, $nom, $prenom, $birthdate, $id]);
    }

    public static function delete($id,$columId = 'id_enfant')
    {
        return App::getDatabase()->prepareInsert("DELETE FROM " . self::getTable() . " WHERE ".$columId." = ?",[$id],get_called_class(),true);
    }
     */
}