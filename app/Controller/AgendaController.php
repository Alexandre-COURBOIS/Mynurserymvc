<?php


namespace App\Controller;

use App\Model\EnfantModel;
use App\Model\ReservationModel;
use App\Weblitzer\Controller;


class AgendaController extends Controller
{
    public function AffichageReservations()
    {
        $user_id = $_SESSION['login']['id'];

        $reservations = ReservationModel::findById($user_id,'id_responsable');



        $titre = "<h2 class='title_agenda'> Vos réservations : </h2>";


        $this->render('app.default.agenda.agenda',array(
            'titre' => $titre,
            'reservations' => $reservations,

        ));

    }
}