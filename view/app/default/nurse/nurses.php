<div class="container">

    <h2 id="titreCreche"><?= $titre ?></h2>
    <a id="btnAllCreche" href="<?php echo $view->path('nurseall') ?>">Voir toutes les crèches</a>
    <div class="separator"></div>
        <?php
        $userlat = $_SESSION['login']['lat'];
        $userlgt = $_SESSION['login']['lgt'];
        foreach ($creches as $creche) {
            $distance = (round(calculateDistance($userlat, $userlgt, $creche->latitude, $creche->longitude) / 1000, 1));
            if ($distance <= 30) {?>
                <div class="row" style="margin-left: 20%;">
                    <div class="col-8">
                        <p><span id="creche"> <?=$creche->nom_creche;?></span> à <span id="dist"><?=$distance;?> km</span> de chez vous</p>
                    </div>
                    <div class="col">
                        <a id="btnDescr" href="<?=$view->path('singlenurse', array($creche->id_creche));?>">Plus de détail</a>
                    </div>
                </div>
                <div class="separ"></div>
           <?php }
        }
        ?>

</div>
<?php
function calculateDistance($lat1, $lng1, $lat2, $lng2, $miles = false)
{
    $earth_radius = 6378137;   // Terre = sphère de 6378km de rayon
    $rlo1 = deg2rad($lng1);
    $rla1 = deg2rad($lat1);
    $rlo2 = deg2rad($lng2);
    $rla2 = deg2rad($lat2);
    $dlo = ($rlo2 - $rlo1) / 2;
    $dla = ($rla2 - $rla1) / 2;
    $a = (sin($dla) * sin($dla)) + cos($rla1) * cos($rla2) * (sin($dlo) * sin(
                $dlo));
    $d = 2 * atan2(sqrt($a), sqrt(1 - $a));
    return ($earth_radius * $d);
}
