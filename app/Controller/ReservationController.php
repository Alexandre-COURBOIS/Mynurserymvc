<?php
namespace App\Controller;

use App\Model\EnfantModel;
use App\Model\ReservationModel;
use App\Weblitzer\Controller;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Model;

class ReservationController extends Controller
{

    public function reservation()
    {
        $titre = 'Espace réservation';
        $liste_enfants = EnfantModel::findById($_SESSION['login']['id'], 'id_responsablelegal');

        $errors = array();
        if (!empty($_POST['submitted'])){

            $creche = $_GET['id'];
            $id = $_SESSION['login']['id'];

            $post = $this->cleanXss($_POST);

            $debut = $post['debut_resa'];
            $fin = $post['fin_resa'];
            $id_enfant = $post['enfant_resa'];


            $valid = new Validation();

            if ($valid->IsValid($errors)){

                ReservationModel::insert($creche,$id_enfant,$id,$debut,$fin,$creche,$id_enfant);
                $this->redirect('');
            }
        }
        $form = new Form($errors);


        $this->render('app.default.reservation',array(
            'titre' => $titre,
            'enfants' => $liste_enfants,
        ));
    }


}