<?php

$routes = array(
    array('home','default','index'),

    // page,controller,method

    array('ajoutEnfant','enfant','ajoutEnfant'),
    array('editProfil','profil','edit'),
    array('deconnexion','profil','deconnexion'),

    array('reservation','reservation','reservation'),
    array('editEnfant','enfant','editEnfant', array('id')),
    array('deleteEnfant','enfant','deleteEnfant', array('id')),

    array('map','map','map'),
    array('map_request','map','mapRequest'),

);









