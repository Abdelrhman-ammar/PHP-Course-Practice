<?php

    //require_once 'task.php';
    //$tasks = $app['database']->selectQuery('tasks','task');
    $tasks = App::get('database')->selectQuery('tasks','task');
    //$users = $app['database']->selectQueryArr('users');
    $users = App::get('database')->selectQueryArr('users');
    //die(var_dump($names[0]->name));
    require_once 'views/index.view.php';