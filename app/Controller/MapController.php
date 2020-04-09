<?php


namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\CrecheModel;
use App\Weblitzer\Model;


class MapController extends Controller
{

    public function Map()
    {
        $this->render('app.default.map.map', array(
        ));
    }

    public function mapRequest()
    {
        $creches = CrecheModel::All();
        echo json_encode($creches);

/*        $this->render('app.default.map.map_request', array(
        ));*/

    }

}