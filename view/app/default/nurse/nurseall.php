<?php if (!empty($_SESSION)) {
    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login']['user'] === "particulier") {

            echo '<h2>' . $titre . '</h2>';
            echo '<ul class="list-group">';
            foreach ($creches as $creche) {
                echo '<li class="list-group-item"><a href="' . $view->path('singlenurse', array($creche->id_creche)) . '"> ' . $creche->nom_creche . '</a></li>';
                echo '</ul>';
            }


        } else {
            header('Location: http://localhost/mynursery');
        }
    } else {
        header('Location: http://localhost/mynursery');
    }
} else {
    header('Location: http://localhost/mynursery');
}