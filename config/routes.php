<?php

$routes = array(
    array('home','default','index'),
    array('contact','default','contact'),
    array('single','default','single',array('id')),
    array('single2','default','single2',array('id','slug')),

    // articles
    array('articles','article','index'),
    array('detailarticle','article','single',array('id')),
    array('addarticle','article','add'),
    array('updatearticle','article','update',array('id')),
    array('deletearticle','article','delete',array('id')),

);









