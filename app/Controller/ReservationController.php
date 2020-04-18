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
            $post = $this->cleanXss($_POST);
            $debut = $_POST['debut_resa'];
            $fin = $_POST['fin_resa'];
            $select_enfant = $_POST['enfant_resa'];
            $valid = new Validation();

            if ($valid->IsValid($errors)){
                print_r($_POST);

               /* $this->redirect('');*/
            }
        }
        $form = new Form($errors);


        $this->render('app.default.reservation',array(
            'titre' => $titre,
            'enfants' => $liste_enfants,
        ));
    }


}