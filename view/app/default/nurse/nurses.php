<div class="container">
    <ul class="list-group">
        <?php
        $id = $_SESSION['login']['id'];
        print_r($_SESSION);
        $userlat = $_SESSION['login']['lat'];
        $userlgt = $_SESSION['login']['lgt'];
        foreach ($creches as $creche) {
            $distance = (round(calculateDistance($userlat, $userlgt, $creche->latitude, $creche->longitude) / 1000,1));
            if($distance <= 30) {
            echo '<li class="list-group-item">' . $creche->nom_creche . '</li>';


                echo '<span>à ' . $distance . ' km de chez vous</span>';
            }
        }
        ?>
    </ul>

</div>
<?php
//print_r($creche);

 function calculateDistance($lat1, $lng1, $lat2, $lng2, $miles = false) {
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
