<?php
if ($enfant[0]->sexe == 'garçon') {
    $titleColor = 'rgba(155, 193, 188, 0.8)';
} elseif ($enfant[0]->sexe == 'non-genré') {
    $titleColor = 'rgba(237, 106, 90, 0.5)';
} elseif ($enfant[0]->sexe == 'fille') {
    $titleColor = 'rgba(244, 241, 187, 0.8)';
}
?>
<h1 id="titre" style="color: <?=$titleColor;?>;">Profil de <?=$enfant[0]->prenom;?> <?=$enfant[0]->nom;?></h1>
<p>Sa date de naissance : <?=$enfant[0]->birthdate;?></p>
<h2 id="sousTitre">Personne(s) responsable(s) de <?= ucfirst($enfant[0]->prenom) ?></h2>
<ul>
    <li><p>Responsable légal : <?= ucfirst($_SESSION['login']['nom']) . ' ' . ucfirst($_SESSION['login']['prenom'])?></p></li>
<?php
if (!empty($autreResp)){
    foreach ($autreResp as $autreRes){
        if ($autreRes->role_autre_respons == 'autreFamille'){
            $role = 'Autre membre de la famille';
        } elseif ($autreRes->role_autre_respons == 'pere'){
            $role = 'Père';
        } elseif ($autreRes->role_autre_respons == 'mere'){
            $role = 'Mère';
        } elseif ($autreRes->role_autre_respons == 'grandMere'){
            $role = 'Grand-mère';
        } elseif ($autreRes->role_autre_respons == 'grandPere'){
            $role = 'grand-père';
        } elseif ($autreRes->role_autre_respons == 'oncle'){
            $role = 'Oncle';
        } elseif ($autreRes->role_autre_respons == 'tante'){
            $role = 'Tante';
        } elseif ($autreRes->role_autre_respons == 'ami'){
            $role = 'Ami de la famille';
        }
        echo '<li><p>'.$role.' : ' . $autreRes->nom_autre_respons . ' ' . $autreRes->prenom_autre_respons . '</p>
              <a id="btnEnfant" href="' . $view->path('deleteResponsable', array($enfant[0]->id_enfant, $autreRes->id_autre_responsable)) . '">Supprimer le responsable</a></li>';
    }
}?>
</ul>
<?php
echo '<a id="btnEnfant" href="' . $view->path('ajoutResponsable', array($enfant[0]->id_enfant)) . '">Ajouter une personne responsable</a>';
echo '<br><a id="btnEnfant" href="' . $view->path('editEnfant', array($enfant[0]->id_enfant)) . '">Editer le profil</a>';
echo '<br><a id="btnEnfant" href="' . $view->path('deleteEnfant', array($enfant[0]->id_enfant)) . '">Supprimer le profil</a>';