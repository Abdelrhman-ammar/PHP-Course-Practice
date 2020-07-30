<?php
    /*
    require_once 'task.php';
    require_once 'functions.php';

    $pdo = connectToDB('mysql','127.0.0.1','todoes','root','pass');
    $statement = 'select * from tasks';
    $result = DBQuery($pdo, $statement);
    $tasks = toArrOfObjects($result,'task');
    require_once 'home.php';
    */

    //$app['config'] = require_once 'config.php';
    App::bind('config', require_once 'config.php');
    //require_once 'database/connection.php';
    //require_once 'database/queryBuilder.php';
    //$pdo = connection::connect('todoes','root','pass');
    //$pdo = connection::connectConfig($app['config']['database']);
    $pdo = connection::connectConfig(App::get('config')['database']);
    return new queryBuilder($pdo);