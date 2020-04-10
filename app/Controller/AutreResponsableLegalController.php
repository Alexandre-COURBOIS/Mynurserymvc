<?php


namespace App\Controller;


use App\Model\EnfantModel;
use App\Weblitzer\Controller;
use App\Model\AutreResponsableLegalModel;
use App\Service\Form;
use App\Service\Validation;

class AutreResponsableLegalController extends Controller
{
    public function ajout()
    {
        $errors = array();
        if (!empty($_POST['submitted'])){
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['nom_autreResp'] = $valid->textValid($post['nom_autreResp'], 'son nom', 2, 20);
            $errors['prenom_autreResp'] = $valid->textValid($post['prenom_autreResp'], 'son prénom', 2, 20);
            $errors['role_autreResp'] = $valid->selectValid($post['role_autreResp'], 'un rôle');
            if ($valid->IsValid($errors)){

            }
        }
        $form = new Form($errors);
        $this->render('app.default.autreResponsable.ajoutResponsable',array(
            'form' => $form,
        ));
    }
}