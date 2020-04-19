<?php
echo '<h2 id="titre">' . $titre .  '</h2>';
echo '<ul class="list-group">';
foreach ($creches as $creche) {
    echo '<li class="list-group-item">' . $creche->nom_creche . '</li>';
}
echo '</ul>';