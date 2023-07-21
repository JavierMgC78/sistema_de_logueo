<?php
require_once ("mdls/paginas/Mdl_pagina_acceso.php");
require_once ("functions.php");

class Ctrl_pagina_acceso{


    public function verificar_acceso(){
        $acceso     = [];
        $mensaje    = '';
        
        // Verificar si se ha enviado el formulario
        if (isset($_POST['sbmt_formAcceso'])) {

            $datosAcceso = array(
                'name_user' => sanitizar($_POST['name_user']),
                'pass_user' => md5($_POST['pass_user'])
            );

            //Verificar si existe el usuario
            $acceso = Mdl_pagina_acceso::verificar_acceso($datosAcceso);

            //No existe el usuario
            if($acceso['count'] === 0){
                $_SESSION['activa'] = false;

                echo    'Usuario o Contraseña incorrectos';
                echo    '<script>
                            if(window.history.replaceState){
                                window.history.replaceState(null, null, window.location.href);
                            }      
                        </script>'; 
            }

            //Si existe el usuario
            if($acceso['count'] === 1){
                $_SESSION['activa'] = true;
                header("Location: /");

                    
                //header("Location: " . $_SERVER['PHP_SELF']);
                //exit(); // Asegúrate de detener la ejecución del código después de redirigir
            }
        }
    }

}




