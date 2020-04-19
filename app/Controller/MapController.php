<?php


namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\CrecheModel;
use App\Weblitzer\Model;
use App\Model\RateModel;


class MapController extends Controller
{

    public function Map()
    {
        $this->render('app.default.map.map', array());
    }

    public function mapRequest()
    {

        $crechess = CrecheModel::All();


        $rate =  RateModel::avgRateNurse($crechess[$i] -> getId_Creche());

        $tab = [];

        for ($i = 0; $i < count($crechess); $i++) {
            
                             $creches = array(
                            'idcreche' => $crechess[$i] -> getId_Creche(),
                            'nomcreche' => $crechess[$i]->getNom_Creche(),
                            'adresse' => $crechess[$i]->getNum_Rue() . ' ' . $crechess[$i]->getNom_Rue() . ' ' . $crechess[$i]->getCodepostal() . ' ' . $crechess[$i]->getVille(),
                            'telephone' => '0' . $crechess[$i]->getTelephone(),
                            'mail' => $crechess[$i]->getEmail(),
                            'latitude' => $crechess[$i]->getLatitude(),
                            'longitude' => $crechess[$i]->getlongitude(),
                            );

            array_push($tab,$creches);

        }

        echo json_encode($tab);


    }
}