<?php
namespace App\Controller;

use App\Model\EnfantModel;
use App\Weblitzer\Controller;

class ReservationController extends Controller
{

    public function reservation()
    {
        $titre = 'Espace réservation';

        $enfants = EnfantModel::findById($_SESSION['login']['id'], 'id_responsablelegal');

        $this->render('app.default.reservation',array(
            'titre' => $titre,
            'enfants' => $enfants,
        ));
    }
}