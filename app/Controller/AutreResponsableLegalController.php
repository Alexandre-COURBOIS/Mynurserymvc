<?php


namespace App\Controller;


use App\Model\EnfantModel;
use App\Weblitzer\Controller;
use App\Model\AutreResponsableLegalModel;
use App\Service\Form;
use App\Service\Validation;

class AutreResponsableLegalController extends Controller
{
    public function descr_Enfant ($id){
        $enfant = EnfantModel::findById($id, 'id_enfant');
        $autreResp = AutreResponsableLegalModel::findById($id, 'id_enfant');

        $this->render('app.default.autreResponsable.descrEnfant', array(
            'enfant' => $enfant,
            'autreResp' => $autreResp,
        ));
    }

    public function ajout($id)
    {
        $enfant = EnfantModel::findById($id, 'id_enfant');
        $errors = array();
        if (!empty($_POST['submitted'])){
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['nom_autreResp'] = $valid->textValid($post['nom_autreResp'], 'son nom', 2, 20);
            $errors['prenom_autreResp'] = $valid->textValid($post['prenom_autreResp'], 'son prénom', 2, 20);
            $errors['role_autreResp'] = $valid->selectValid($post['role_autreResp'], 'un rôle');
            if ($valid->IsValid($errors)){
               AutreResponsableLegalModel::insert($enfant[0]->id_enfant, $post['nom_autreResp'], $post['prenom_autreResp'], $post['role_autreResp']);
                $this->redirect('descrEnfant/'.$enfant[0]->id_enfant.'');
            }
        }
        $form = new Form($errors);
        $this->render('app.default.autreResponsable.ajoutResponsable',array(
            'enfant'=>$enfant,
            'form' => $form,
        ));
    }
    public function deleteResp($idEnfant, $idResp){
        $autreResp = AutreResponsableLegalModel::findById($idResp, 'id_autre_responsable');
        $enfant = EnfantModel::findById($idEnfant, 'id_enfant');
        if (empty($autreResp)){
            $this->Abort404();
        }
        AutreResponsableLegalModel::delete($idResp);
        $this->redirect('descrEnfant/'.$enfant[0]->id_enfant.'');
    }
}