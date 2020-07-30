<?php
    /*
    $router->define([
        'test/index.php'                    =>'controllers/index.php',
        'test/index.php/about'              =>'controllers/about.php',
        'test/index.php/about-culture'      =>'controllers/about-culture.php',
        'test/index.php/contact'            =>'controllers/contact.php',
        'test/index.php/name'              =>'controllers/name.php'
    ]);
    */
    
    $router->get('test/index.php', 'controllers/index.php');
    $router->get('test/index.php/about', 'controllers/about.php');
    $router->get('test/index.php/about-culture', 'controllers/about-culture.php');
    $router->get('test/index.php/contact', 'controllers/contact.php');
    
    $router->post('test/index.php/name', 'controllers/name.php');