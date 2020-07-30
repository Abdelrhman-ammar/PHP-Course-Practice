<?php

    //$app['database']->insert('users',$_POST);
    App::get('database')->insert('users',$_POST);
    //require_once 'views/name.view.php';
    header('location:/test/index.php/name');