<?php
namespace App\Controller;

use App\Model\CrecheModel;
use App\Model\EnfantModel;
use App\Model\ReservationModel;
use App\Weblitzer\Controller;
use App\Service\Form;
use App\Service\Validation;

class ReservationController extends Controller
{

    public function reservation()
    {
        $titre = 'Espace réservation';

        $creche = $_GET['id'];

        $liste_enfants = EnfantModel::findById($_SESSION['login']['id'], 'id_responsablelegal');
        $creche_id = CrecheModel::findById($creche,'id_creche');


        $errors = array();

        if (!empty($_POST['submitted'])){

            $id = $_SESSION['login']['id'];
            $email = $_SESSION['login']['email'];
            $genre = ucfirst($_SESSION['login']['sexe']);
            $nom = ucfirst($_SESSION['login']['nom']);

            $post = $this->cleanXss($_POST);

            $debut = $post['debut_resa'];
            $fin = $post['fin_resa'];
            $id_enfant = $post['enfant_resa'];

            $enf = EnfantModel::findById($id_enfant, 'id_enfant');

            if($id_enfant == "none") {
                $errors['select'] = "Merci de renseigner un de vos enfants";
            };

            $valid = new Validation();

            if ($valid->IsValid($errors)){

                ReservationModel::insert($creche,$id_enfant,$id,$debut,$fin,$creche,$id_enfant);

                $to_email = $email;
                $subject = "Bienvenue sur MyNursery";
                $body = "
                Bonjour, ".$genre.' '.$nom."
           
                Nous vous confirmons votre réservation auprès de la crèche, ".$creche_id[0]->getnom_Creche()."
                Pour votre enfant : ".$enf[0]->getnom().' '.$enf[0]->getPrenom()."
                Du : ".$debut." au ".$fin."
                
                Cette réservation est désormais visible depuis votre agenda.
                
                Pour toute modification merci de prendre contact avec le site MyNursery.
            
                Bien à vous, 
            
                L'équipe MyNursery";

                $headers = "From : webapsy@gmail.com";

                mail($to_email,$subject,$body,$headers);

                $this->redirect('');

            }
        }
        $form = new Form($errors);


        $this->render('app.default.reservation',array(
            'titre' => $titre,
            'enfants' => $liste_enfants,
            'form' => $form,
        ));
    }


}