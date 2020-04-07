<?php

namespace App\Controller;

use App\Model\ProfilModel;
use App\Model\EnfantModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Weblitzer\Model;

/**
 *
 */
class ProfilController extends Controller
{

    public function edit(){
        $titre = "Editer votre profil";
        $message = "Seul ces éléments peuvent être modifiés";
       /* $profil = ProfilModel::findById($_SESSION['login']['id'], 'id_responsablelegal');
        if (empty($profil)){
            $this->Abort404();
        }*/
        $errors = array();
        if (!empty($_POST['submitted'])){
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['tel'] = $valid->isNumeric($post['tel']);
            $errors['tel'] = $valid->textValid($post['tel'], 'un numéro de téléphone', 10, 10);
            $errors['num-rue'] = $valid->intValid($post['num-rue'], 0, 9999);
            $errors['street'] = $valid->textValid($post['street'], 'un nom de rue', 4, 200);
            $errors['code-postal'] = $valid->textValid($post['code-postal'], 'un code postal', 5, 5);
            $errors['city'] = $valid->textValid($post['city'], 'une ville', 1, 70);
            /*if ($valid->IsValid($errors)){
                ProfilModel::edit($post['tel'], $post['num-rue'], $post['id-rue'], $post['street'], $post['code-postal'], $post['city'], $post['longitude'], $post['latitude'], $-SESSION['login']['id']);
                //$this->redirect('index.php?page=fruits');
            }*/
        }
        $form = new Form($errors);
        $this->render('app.default.editProfil', array(
            'titre' => $titre,
            'message' => $message,
            'form' => $form,
            /*'profil' => $profil,*/
        ));
    }
}
