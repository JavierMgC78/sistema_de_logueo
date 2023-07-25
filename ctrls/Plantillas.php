<?php
//require_once ("ctrls/paginas/Ctrl_pagina_acceso.php");

/**
 * INDICE DE FUNCIONES
 * 
 * acceso()
 * opciones()
 */



class Plantillas{
    /**
     * Trae la plantilla de inicio de sesión
     *
     * @return
     */
    public function login(){
        require_once ("vistas/plantillas/login.php");
    }



    /**
     * Trae la plantilla de opciones
     *
     * @return
     */
    public function opciones(){
        require_once ("vistas/plantillas/opciones.php");
    }
}

    

