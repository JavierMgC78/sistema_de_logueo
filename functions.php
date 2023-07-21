<?php

/**
 * Sanitiza las variables con las que se realizán consultas a la base de datos.
 *
 * @param string $input
 * @return void
 */
function sanitizar($input) {
    $sanitizedInput = trim($input);
    $sanitizedInput = stripslashes($sanitizedInput);
    $sanitizedInput = htmlspecialchars($sanitizedInput);
    
    return $sanitizedInput;
}

/**
 * Controla el acceso a las opciones basandose en si existe una sesion iniciada o no-
 *
 * @return void
 */
function acceso_a_opcion(){
    if(isset($_SESSION['activa'])){
        if($_SESSION['activa'] === false){
            header("Location: /");
        }

    }else{
        header("Location: /");
    }
}