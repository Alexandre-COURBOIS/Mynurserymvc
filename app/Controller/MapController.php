<?php


namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\CrecheModel;
use App\Weblitzer\Model;

class MapController extends Controller
{

    public function Map()
    {

    }

    public function mapRequest()
    {
        $creche = CrecheModel::All();
        return $creche;
    }

}