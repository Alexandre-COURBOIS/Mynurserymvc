<?php


namespace App\Model;


use App\App;
use App\Controller\NurseController;
use App\Weblitzer\Model;


class RateModel extends Model
{
    protected static $table = 'nurs_notes';
    protected $id_user;
    protected $id_creche;

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdCreche()
    {
        return $this->id_creche;
    }

    /**
     * @param mixed $id_creche
     */
    public function setIdCreche($id_creche): void
    {
        $this->id_creche = $id_creche;
    }

    public static function rateNurse($id_user, $id_creche, $note) {
        $sql = "INSERT INTO " . self::getTable() . " VALUES(NULL, ?, ?, ?)";
        return App::getDatabase()->prepareInsert($sql, [$id_user, $id_creche, $note]);
    }
    public static function avgRateNurse($id_creche) {
        $sql = "SELECT AVG(note) FROM " . self::getTable() . " WHERE id_creche = $id_creche";
        return App::getDatabase()->aggregation($sql);
    }
    public static function checkRate($id_creche) {
        $sql = "SELECT id_user FROM " . self::getTable() . " WHERE id_creche = $id_creche";
        return App::getDatabase()->aggregation($sql);
    }
}