<?php

$routes = array(
    array('home','default','index'),

    array('ajoutEnfant','enfant','ajoutEnfant'),
    array('editProfil','profil','edit'),
    array('deconnexion','profil','deconnexion'),

    array('reservation','reservation','reservation'),
    array('editEnfant','enfant','editEnfant', array('id')),
    array('deleteEnfant','enfant','deleteEnfant', array('id')),

    array('map_request','map','mapRequest'),

    array('nurses', 'nurse', 'nurse'),
    array('nurseall', 'nurse', 'nurseall'),
    array('singlenurse', 'nurse', 'singlenurse', array('id')),

);









