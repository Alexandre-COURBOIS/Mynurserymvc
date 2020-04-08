<?php
namespace App\Controller;

use App\Model\EnfantModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Weblitzer\Model;

/**
 *
 */
class EnfantController extends Controller
{

    public function ajoutEnfant()
    {
        $titre = 'Vous pouvez ajouter un enfant';
        $errors = array();
        if (!empty($_POST['submitted'])){
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['sexe'] = $valid->radioExist($post['sexe'], 'genre');
            $errors['nom_enfant'] = $valid->textValid($post['nom_enfant'], 'son nom', 2, 20);
            $errors['prenom_enfant'] = $valid->textValid($post['prenom_enfant'], 'son prénom', 2, 20);
            $errors['birthdate'] = $valid->textValid($post['birthdate'], 'sa date de naissance', 10, 10);

            if ($valid->IsValid($errors)){
                EnfantModel::insert($_SESSION['login']['id'], $post['nom_enfant'], $post['prenom_enfant'], $post['birthdate'], $post['sexe']);
                $this->redirect('');
            }
        }
        $form = new Form($errors);
        $this->render('app.default.ajoutEnfant',array(
            'titre' => $titre,
            'form' => $form,
        ));
    }

    public function editEnfant($id){
        $enfant = EnfantModel::findById($id, 'id_enfant');
        if (empty($enfant)){
            $this->Abort404();
        }
        $errors = array();
        if (!empty($_POST['submitted'])){
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['sexe'] = $valid->radioExist($post['sexe'], 'genre');
            $errors['nom_enfant'] = $valid->textValid($post['nom_enfant'], 'son nom', 2, 20);
            $errors['prenom_enfant'] = $valid->textValid($post['prenom_enfant'], 'son prénom', 2, 20);
            $errors['birthdate'] = $valid->textValid($post['birthdate'], 'sa date de naissance', 10, 10);
            if ($valid->IsValid($errors)){
                EnfantModel::edit($post['nom_enfant'], $post['prenom_enfant'], $post['birthdate'], $post['sexe'], $id);
                $this->redirect('');
            }
        }
        $form = new Form($errors);
        $this->render('app.default.editEnfant', array(
            'enfant' => $enfant,
            'form' => $form,
        ));
    }
    public function deleteEnfant($id){
        $enfant = EnfantModel::findById($id, 'id_enfant');
        if (empty($enfant)){
            $this->Abort404();
        }
        EnfantModel::delete($id);
        $this->redirect('');
    }
}
