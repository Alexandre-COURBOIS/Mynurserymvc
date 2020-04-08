<?php

$routes = array(
    array('home','default','index'),
    array('ajoutEnfant','enfant','ajoutEnfant'),
    array('editProfil','profil','edit'),
    array('deconnexion','profil','deconnexion'),

    array('reservation','reservation','reservation'),
    array('editEnfant','enfant','editEnfant', array('id')),
    array('deleteEnfant','enfant','deleteEnfant', array('id')),
);









