<?php

$html = '<ul class="list-group">';
$html .= '<li class="list-group-item">' . $creche[0]->nom_creche . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->nom_gerant . ' ' . $creche[0]->prenom_gerant . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->email . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->telephone . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->num_rue . ' ' . $creche[0]->nom_rue . ' ' . $creche[0]->codepostal . ' ' . $creche[0]->ville . '</li>';
$html .= '<li class="list-group-item">Les autres utilisateurs ont noté ' . $note . '/5 cette crèche';
echo $html;
?>
<form action="" method="post">
    <select name="rate">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <input type="submit" name="submitted" class="btn btn-success" value="Noter!">
</form>