<?php

namespace App\Controller;

/*use App\Model\AjoutEnfantModel;*/
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
        if (empty($profils)) {
            $this->Abort404();
        }
        $this->render('app.default.profil', array(
            'titre' => $titre,
            'msg' => $msg,
            'profils' => $profils,
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
