<h1 id="titre">
    <?= $titre;
    $session = $_SESSION['login'];
    echo '<br>' . ucfirst($_SESSION['login']['sexe']) . ' ' . ucfirst($session['nom']) . ' ' . ucfirst($session['prenom']);
    ?>
</h1>
<div class="container">
    <div class="row">
        <div class="col" style="text-align: center">
            <a id="btnAjoutEnfant" href="<?= $view->path('editProfil'); ?>">Editer le profil</a>
            <h2 id="sousTitre"><?= $msg ?></h2>
            <p><span id="underline">Votre nom et prénom : </span> <?= ucfirst($session['nom']) . ' ' . ucfirst($session['prenom']) ?></p>
            <p><span id="underline"> Votre date de naissance : </span> <?= $session['birthdate'] ?></p>
            <p><span id="underline"> Votre adresse email : </span> <?= $session['email'] ?></p>
            <p><span id="underline"> Votre numéro de téléphone
                : </span> <?php if (empty($session['update'])) echo '0'; ?><?= $session['telephone'] ?></p>
            <p><span id="underline"> Votre adresse postale
                : </span> <?php
                if ($session['supp_rue'] == 'NULL'){
                    echo $session['num_rue'] . ' ' . $session['nom_rue'] . ' ' . $session['codepostal'] . ' ' . $session['ville'] . '</p>';
                } else {
                    echo $session['num_rue'] . ' ' . $session['supp_rue'] . ' ' . $session['nom_rue'] . ' ' . $session['codepostal'] . ' ' . $session['ville'] . '</p>';
                }?>
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
                    $html .= '<li id="affEnfant" style="background-color: ' . $bgColor . ';">' . ucfirst($enfant->nom) . ' ' . ucfirst($enfant->prenom) . '
                <ul>
                <li>Sexe : ' . ucfirst($enfant->sexe) . '</li>
                <li>Date de naissance : ' . $enfant->birthdate . '</li>
                </ul>
                 <a id="btnDescr" href="' . $view->path('descrEnfant', array($enfant->id_enfant)) . '">Voir Plus</a>
                </li>';
                }
                $html .= '</ul>';
                echo $html;
            }
            ?>
        </div>
    </div>
</div>


