<?php if (!empty($_SESSION)) {
    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login']['user'] === "particulier") {
?>
            <h2 id="titreCreche"><?=$titre?></h2>
            <a id="btnAllCreche" href=" <?= $view->path('nurses'); ?>" style="margin-left: 39%">Retour sur les crèches de proximités</a>
            <div class="separator"></div>
            <?php
            foreach ($creches as $creche) {?>
                <div class="row" style="margin-left: 20%;">
                    <div class="col-8">
                        <p><span id="creche"> <?=$creche->nom_creche;?></span></p>
                    </div>
                    <div class="col">
                        <a id="btnDescr" href="<?=$view->path('singlenurse', array($creche->id_creche));?>">Plus de détail</a>
                    </div>
                </div>
                <div class="separ"></div>
           <?php }


        } else {
            header('Location: http://localhost/mynursery');
        }
    } else {
        header('Location: http://localhost/mynursery');
    }
} else {
    header('Location: http://localhost/mynursery');
}

