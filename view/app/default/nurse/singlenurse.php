<?php
print_r($creche);
$html = '<ul class="list-group">';
$html .= '<li class="list-group-item">' . $creche[0]->nom_creche . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->nom_gerant . ' ' . $creche[0]->prenom_gerant . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->email . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->telephone . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->num_rue . ' ' . $creche[0]->nom_rue . ' ' . $creche[0]->codepostal . ' ' . $creche[0]->ville . '</li>';
echo $html;
