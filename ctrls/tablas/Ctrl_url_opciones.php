<?php
    include_once ("mdls/tablas/Mdl_url_opciones.php");

    class Ctrl_url_opciones{

        public static function obtener_url_opciones(){
            return Mdl_url_opciones::obtener_url_opciones();
        }

    }

