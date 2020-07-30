<?php

    class connection {
        public static function connect($DBName, $username = 'root', $pass = '', $host = '127.0.0.1', $DBMS = 'mysql'){
            try {
                return new PDO("$DBMS:host=$host;dbname=$DBName",$username,$pass);
            }catch (PDOException $e){
                die($e->getMessage());
            }
        }
        public static function connectConfig($config){
            try {
                return new PDO(
                    $config['DBMS'] . ':host=' . $config['host'] . ';dbname=' . $config['DBName'],
                    $config['username'],
                    $config['password']
                );
            }catch (PDOException $e){
                die($e->getMessage());
            }
        }
    }