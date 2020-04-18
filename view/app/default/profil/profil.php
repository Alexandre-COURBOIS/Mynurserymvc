<h1 id="titre">
    <?= $titre;
    $session = $_SESSION['login'];
    echo '<br>' . ucfirst($_SESSION['login']['sexe']) . ' ' . ucfirst($session['nom']) . ' ' . ucfirst($session['prenom']);
    ?>
</h1>
<div class="container">
    <div class="row">
        <div class="col" style="text-align: center">
            <h2 id="sousTitre"><?= $msg ?></h2>
            <p>Votre nom et prénom : <?= ucfirst($session['nom']) . ' ' . ucfirst($session['prenom']) ?></p>
            <p>Votre date de naissance : <?= $session['birthdate'] ?></p>
            <p>Votre email : <?= $session['email'] ?></p>
            <p>Votre numéro de téléphone
                : <?php if (!empty($session['update'])) echo '0'; ?><?= $session['telephone'] ?></p>
            <p>Votre adresse
                : <?= $session['num_rue'] . ' ' . $session['supp_rue'] . ' ' . $session['nom_rue'] . ' ' . $session['codepostal'] . ' ' . $session['ville'] ?></p>
            </br><a href="<?= $view->path('editProfil'); ?>">Editer le profil</a>
        </div>
        <div class="col" style="text-align: center">
            <a id="btnAjoutEnfant" href="<?=$view->path('ajoutEnfant')?>">Ajouter un enfant</a>
            <?php if (!empty($enfants)) { ?>
                <h2 id="sousTitre"><?= $titreEnfant ?></h2>
                <?php
                $html = '<ul>';
                foreach ($enfants as $enfant) {
                    if ($enfant->sexe == 'garçon') {
                        $bgColor = 'rgba(155, 193, 188, 0.8)';
                    } elseif ($enfant->sexe == 'non-genré') {
                        $bgColor = 'rgba(237, 106, 90, 0.5)';
                    } elseif ($enfant->sexe == 'fille') {
                        $bgColor = 'rgba(244, 241, 187, 0.8)';
                    }
                    $html .= '<li id="affEnfant" style="background-color: ' . $bgColor . ';">' . $enfant->nom . ' ' . $enfant->prenom . '

                <ul>
                <li>' . $enfant->sexe . '</li>
                <li>Date de naissance : ' . $enfant->birthdate . '</li>
                </ul>

                 <a id="btnEnfant" href="' . $view->path('descrEnfant', array($enfant->id_enfant)) . '">Voir Plus</a>
                </li>';
                }
                $html .= '</ul>';
                echo $html;
            }
            ?>
        </div>
    </div>
</div>


        <?php } else {
            header('Location: http://localhost/mynursery');
        }
    } else {
        header('Location: http://localhost/mynursery');
    }
} else {
    header('Location: http://localhost/mynursery');
}
