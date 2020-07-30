<?php

    require_once 'vendor/autoload.php';
    //require_once 'core/Router.php';
    //require_once 'core/Request.php';
    App::bind('database',require_once 'core/bootstrap.php');
    try {
        $router = Router::load('routes.php');
        require_once $router->direct(Request::url(),Request::method());
    }catch (Exception $e){
        echo $e;
    }
