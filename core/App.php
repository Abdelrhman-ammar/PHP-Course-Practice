<?php

    class App{

        protected static $registry = [];

        public static function bind($key , $vaue){

            static::$registry[$key] = $vaue;
        }

        public static function get($key){

            if(! array_key_exists($key, static::$registry)){
                throw new Exception("no {$key} is existed.");
            }
            
            return static::$registry[$key];

        }

    }