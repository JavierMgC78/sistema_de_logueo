<?php
    session_start();
    require_once("ctrls/Plantillas.php");
    $instPlantilla = new Plantillas(); 
    
     if(isset($_SESSION['activa'])){

        if($_SESSION['activa'] === true ){
            $instPlantilla->opciones();
            exit;

        }else{
            $instPlantilla->login();
            exit;
        } 
    
    }else{
        $instPlantilla->login();
        //header("location: /");
        exit;
    }
