<div class="container">
    <a id="btnAllCreche" href=" <?= $view->path('nurses'); ?>" style="margin-left: 32.5%">Retour sur les crèches de proximités</a>
    <h2 id="titreCreche"><?=$creche[0]->nom_creche;?></h2>
    <div class="separ"></div>
    <div class="row" style="margin-left: 15%">
        <div class="col">
            <p><span id="underline">Adresse mail :</span> <?=$creche[0]->email;?></p>
        </div>
        <div class="col">
            <p><span id="underline"> Numéro de téléphone :</span> 0<?=$creche[0]->telephone;?></p>
        </div>
    </div>
    <div class="separator"></div>
    <div class="row" style="margin-left: 25%">
        <div class="col">
            <p><span id="underline">Adresse postale :</span><?=$creche[0]->num_rue;?> <?=$creche[0]->nom_rue;?> <?=$creche[0]->codepostal;?> <?=$creche[0]->ville;?></p>
        </div>
    </div>
    <div class="separ" ></div>
    <div class="row" style="margin-left: 40%">
        <a id="btnDescr" href="http://localhost/mynurserymvc/public/reservation?id='.urlencode($creche[0]->id_creche).'">Réserver dans cette crèche</a>
    </div>
</div>



<?php
/*$html = '<ul class="list-group">';
$html .= '<li class="list-group-item">' . $creche[0]->nom_creche . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->nom_gerant . ' ' . $creche[0]->prenom_gerant . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->email . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->telephone . '</li>';
$html .= '<li class="list-group-item">' . $creche[0]->num_rue . ' ' . $creche[0]->nom_rue . ' ' . $creche[0]->codepostal . ' ' . $creche[0]->ville . '</li>';
$html .= '<a href="http://localhost/mynurserymvc/public/reservation?id='.urlencode($creche[0]->id_creche).'">Réserver dans cette crèche</a>';
echo $html;*/
