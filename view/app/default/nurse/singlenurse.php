<?php if (!empty($_SESSION)) {
    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login']['user'] === "particulier") { ?>


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
        <a id="btnDescr" href="http://localhost/mynurserymvc/public/reservation?id=<?= urlencode($creche[0]->id_creche)?>">Réserver dans cette crèche</a>
    </div>
</div>

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

        <?php } else {
            header('Location: http://localhost/mynursery');
        }
    } else {
        header('Location: http://localhost/mynursery');
    }
} else {
    header('Location: http://localhost/mynursery');
}