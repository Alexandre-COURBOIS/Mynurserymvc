<?php


namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\CrecheModel;
use App\Weblitzer\Model;

class NurseController extends Controller
{
    public function nurse() {
        $titre = 'Liste de toutes les crèches';
        $creches = CrecheModel::All();
        $this->render('app.default.nurse.nurses',array(
            'titre' => $titre,
            'creches' => $creches,
        ));
    }
}