<?php


namespace App\Controller;

use App\Model\CrecheModel;

class MapController extends Controller
{

    public function Map()
    {

    }

    public function mapRequest()
    {
        CrecheModel::getAllCreche();
    }
}