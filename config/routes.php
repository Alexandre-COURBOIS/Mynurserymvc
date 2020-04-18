<?php

$routes = array(
    array('home','default','index'),
    array('ajoutEnfant','enfant','ajoutEnfant'),
    array('editProfil','profil','edit'),
    array('reservation','reservation','reservation'),
    array('editEnfant','enfant','editEnfant', array('id')),
    array('deleteEnfant','enfant','deleteEnfant', array('id')),
    array('ajoutResponsable','autreResponsableLegal','ajout', array('id')),
    array('descrEnfant','autreResponsableLegal','descr_Enfant', array('id')),
    array('deleteResponsable','autreResponsableLegal','deleteResp', array('idEnfant', 'idResp')),
);









