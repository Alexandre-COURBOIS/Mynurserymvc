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

    array('ajoutResponsable','autreResponsableLegal','ajout', array('id')),
    array('descrEnfant','autreResponsableLegal','descr_Enfant', array('id')),
    array('deleteResponsable','autreResponsableLegal','deleteResp', array('idEnfant', 'idResp')),
  
    array('map','map','map'),
    array('map_request','map','mapRequest'),

    array('nurses', 'nurse', 'nurse'),
    array('nurseall', 'nurse', 'nurseall'),
    array('singlenurse', 'nurse', 'singlenurse', array('id')),

);









