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
<?php
echo '<a id="btnEnfant" href="' . $view->path('editEnfant', array($enfant[0]->id_enfant)) . '">Editer le profil</a>';
echo '<br><a id="btnEnfant" href="' . $view->path('deleteEnfant', array($enfant[0]->id_enfant)) . '">Supprimer le profil</a>';