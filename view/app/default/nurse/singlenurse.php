<?php if (!empty($_SESSION)) {
    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login']['user'] === "particulier") { ?>
            <?php
            /*print_r($creche);*/
            $html = '<ul class="list-group">';
            $html .= '<li class="list-group-item">' . $creche[0]->nom_creche . '</li>';
            $html .= '<li class="list-group-item">' . $creche[0]->nom_gerant . ' ' . $creche[0]->prenom_gerant . '</li>';
            $html .= '<li class="list-group-item">' . $creche[0]->email . '</li>';
            $html .= '<li class="list-group-item">' . $creche[0]->telephone . '</li>';
            $html .= '<li class="list-group-item">' . $creche[0]->num_rue . ' ' . $creche[0]->nom_rue . ' ' . $creche[0]->codepostal . ' ' . $creche[0]->ville . '</li>';
            $html .= '<a href="http://localhost/mynurserymvc/public/reservation?id=' . urlencode($creche[0]->id_creche) . '">Réserver</a>';
            echo $html;

        } else {
            header('Location: http://localhost/mynursery');
        }
    } else {
        header('Location: http://localhost/mynursery');
    }
} else {
    header('Location: http://localhost/mynursery');
}

