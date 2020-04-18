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

    public function edit()
    {
        $titre = "Editer votre profil";
        $message = "Seul ces éléments peuvent être modifiés";
        $profil = ProfilModel::findById($_SESSION['login']['id'], 'idresponsable_legale');
        if (empty($profil)) {
            $this->Abort404();
        }
        $errors = array();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['tel'] = $valid->isNumeric($post['tel']);
            $errors['tel'] = $valid->textValid($post['tel'], 'un numéro de téléphone', 10, 10);
            $errors['num-rue'] = $valid->intValid($post['num-rue'], 0, 9999);
            $errors['street'] = $valid->textValid($post['street'], 'un nom de rue', 4, 200);
            $errors['code-postal'] = $valid->textValid($post['code-postal'], 'un code postal', 5, 5);
            $errors['city'] = $valid->textValid($post['city'], 'une ville', 1, 70);
            if ($valid->IsValid($errors)) {
                if ($_POST['id-rue'] == "NULL") {
                    ProfilModel::edit($post['tel'], $post['num-rue'], $post['street'], $post['code-postal'], $post['city'], $post['longitude'], $post['lattitude'], $_SESSION['login']['id']);
                    $_SESSION['login']['telephone'] = $post['tel'];
                    $_SESSION['login']['num_rue'] = $post['num-rue'];
                    $_SESSION['login']['nom_rue'] = $post['street'];
                    $_SESSION['login']['codepostal'] = $post['code-postal'];
                    $_SESSION['login']['ville'] = $post['city'];
                    $_SESSION['login']['lgt'] = $post['longitude'];
                    $_SESSION['login']['lat'] = $post['lattitude'];
                    $_SESSION['login']['update'] = 'modified';
                    $this->redirect('');

                } else {
                    ProfilModel::edit($post['tel'], $post['num-rue'], $post['id-rue'], $post['street'], $post['code-postal'], $post['city'], $post['longitude'], $post['lattitude'], $_SESSION['login']['id']);
                    $_SESSION['login']['telephone'] = $post['tel'];
                    $_SESSION['login']['num_rue'] = $post['num-rue'];
                    $_SESSION['login']['supp_rue'] = $post['id-rue'];
                    $_SESSION['login']['nom_rue'] = $post['street'];
                    $_SESSION['login']['codepostal'] = $post['code-postal'];
                    $_SESSION['login']['ville'] = $post['city'];
                    $_SESSION['login']['lgt'] = $post['longitude'];
                    $_SESSION['login']['lat'] = $post['lattitude'];
                    $_SESSION['login']['update'] = 'modified';
                    $this->redirect('');
                }
            }

        }
        $form = new Form($errors);
        $this->render('app.default.profil.editProfil', array(
            'titre' => $titre,
            'message' => $message,
            'form' => $form,
            'profil' => $profil,
        ));
    }

    public function deconnexion()
    {

        $_SESSION = array();

        session_destroy();

        header('Location: /mynursery/');
    }
}
