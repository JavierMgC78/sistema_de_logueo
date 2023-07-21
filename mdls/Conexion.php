<?php
    require (__DIR__ . "/../dataAcces.php");
    
    class Conexion{
        static public function conectar(){
            
            $linkDb = new PDO($GLOBALS['dbData']['db'], $GLOBALS['dbData']['user'], $GLOBALS['dbData']['pass']);
            $linkDb->exec("set names utf8");

            return $linkDb;
        }
    }
