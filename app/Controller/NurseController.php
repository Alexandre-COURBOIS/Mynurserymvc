<?php


namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\CrecheModel;
use App\Model\ProfilModel;
use App\Weblitzer\Model;

class NurseController extends Controller
{
    public function nurse() {
        if(empty($_SESSION)) {
            $this->redirect('404');
        }

        $titre = 'Les crèches près de chez vous';
        $creches = CrecheModel::All();



        $this->render('app.default.nurse.nurses',array(
            'titre' => $titre,
            'creches' => $creches,
        ));
    }

    public function nurseall() {
        $titre = 'Liste de toutes les crèches';
        $creches = CrecheModel::All();

        $this->render('app.default.nurse.nurseall',array(
            'titre' => $titre,
            'creches' => $creches,
        ));
    }

    public function singlenurse($id) {
        $creche = CrecheModel::findById($id, 'id_creche');
        $this->render('app.default.nurse.singlenurse',array(
            'creche' => $creche,
        ));
    }


}