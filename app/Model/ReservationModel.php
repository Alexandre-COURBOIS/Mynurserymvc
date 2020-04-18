<?php


namespace App\Model;


use App\Weblitzer\Model;
use App\App;

class ReservationModel extends Model
{
    protected static $table = 'nurs_reservation';
    protected $id_reservation;
    protected $id_creche;
    protected $id_responsable;
    protected $id_enfant;
    protected $date_resa;
    protected $fin_resa;
    protected $creche_id_creche;
    protected $enfant_id_enfant;
    protected $created_at;
    protected $modified_at;


    public function getId_reservation()
    {
        return $this->id_reservation;
    }

    public function setId_reservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
    }

    public function getId_creche()
    {
        return $this->id_creche;
    }

    public function setId_creche($id_creche)
    {
        $this->id_creche = $id_creche;
    }

    public function getId_Responsable()
    {
        return $this->id_responsable;
    }

    public function setId_Responsable($id_responsable)
    {
        $this->id_responsable = $id_responsable;
    }

    public function getId_enfant()
    {
        return $this->id_enfant;
    }

    public function setId_enfant($id_enfant)
    {
        $this->id_enfant = $id_enfant;
    }

    public function getdate_resa()
    {
        return $this->date_resa;
    }

    public function setdate_resa($date_resa)
    {
        $this->date_resa = $date_resa;
    }

    public function getfin_resa()
    {
        return $this->fin_resa;
    }

    public function setfin_resa($fin_resa)
    {
        $this->fin_resa = $fin_resa;
    }

    public function getcreche_id_creche()
    {
        return $this->creche_id_creche;
    }

    public function setcreche_id_creche($creche_id_creche)
    {
        $this->creche_id_creche = $creche_id_creche;
    }

    public function getenfant_id_enfant()
    {
        return $this->enfant_id_enfant;
    }

    public function setenfant_id_enfant($enfant_id_enfant)
    {
        $this->enfant_id_enfant = $enfant_id_enfant;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    public function setModified_at($mofidied_at)
    {
        $this->modified_at = $mofidied_at;
    }


    public static function insert($id_creche,$id_enfant,$id_responsable,$date_resa,$fin_resa,$id_creche2,$id_enfant2)
    {
        $sql = "INSERT INTO " . self::getTable() . " VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, NOW(), NULL)";
        return App::getDatabase()->prepareInsert($sql, [$id_creche,$id_enfant,$id_responsable, $date_resa, $fin_resa,$id_creche2,$id_enfant2]);
    }

}