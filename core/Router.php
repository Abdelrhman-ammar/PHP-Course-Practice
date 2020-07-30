<?php

    class Router{
        protected $routes = [
            'GET'=>[],
            'POST'=>[]
        ];

        public static function load($file){
            $router = new static;

            require_once $file;
            
            return $router;
        }

        public function get($url,$controller){
            $this->routes['GET'][$url] = $controller;
        }

        public function post($url,$controller){
            $this->routes['POST'][$url] = $controller;
        }

        public function define($route){
            $this->routes = $route;
        }

        public function direct($url, $requestType){
            if(array_key_exists($url, $this->routes[$requestType])){
                return $this->routes[$requestType][$url];
            }else {
                throw new Exception('no route define for this url');
            }
        }
    }