<?php

namespace App\Controller;

use App\Model\EnfantModel;
use App\Model\ProfilModel;
use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $titre = 'Bienvenue sur votre profil';
        $msg = 'Vos informations sont :';
        $profils = ProfilModel::all();
        $titreEnfant = "Vos enfants à charges :";
        $enfants = EnfantModel::findById($_SESSION['login']['id'], 'id_responsablelegal');
        if (empty($profils)) {
            $this->Abort404();
        }
        $this->render('app.default.profil.profil', array(
            'titre' => $titre,
            'msg' => $msg,
            'profils' => $profils,
            'titreEnfant' => $titreEnfant,
            'enfants' => $enfants,
        ));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
