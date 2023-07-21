<?php
    include_once ("mdls/tablas/Mdl_tabla_url_opciones.php");

    class Ctrl_tabla_url_opciones{

        public static function obtener_url_opciones(){
            return Mdl_tabla_url_opciones::obtener_url_opciones();
        }

    }

