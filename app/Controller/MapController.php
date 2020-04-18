<?php


namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\CrecheModel;
use App\Weblitzer\Model;


class MapController extends Controller
{

    public function Map()
    {
        $this->render('app.default.map.map', array());
    }

    public function mapRequest()
    {

        $crechess = CrecheModel::All();

        $tab = [];

        for ($i = 0; $i < count($crechess); $i++) {
            
                             $creches = array(
                            'nomcreche' => $crechess[$i]->getNom_Creche(),
                            'adresse' => $crechess[$i]->getNum_Rue() . ' ' . $crechess[$i]->getNom_Rue() . ' ' . $crechess[$i]->getCode_Postal() . ' ' . $crechess[$i]->get_Ville(),
                            'telephone' => '0' . $crechess[$i]->getTelephone(),
                            'mail' => $crechess[$i]->get_Email(),
                            'latitude' => $crechess[$i]->get_Latitude(),
                            'longitude' => $crechess[$i]->get_longitude(),
                            );

            array_push($tab,$creches);

        }

        echo json_encode($tab);


    }
}