<?php

    class Conexion{
        static public function conectar(){
            require_once (__DIR__ . "/../dataAcces.php");
            
            $linkDb = new PDO($dbData['db'], $dbData['user'], $dbData['pass']);
            $linkDb->exec("set names utf8");

            return $linkDb;
        }
    }
