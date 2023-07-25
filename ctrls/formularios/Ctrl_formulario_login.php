<?php
require_once ("mdls/tablas/Mdl_plantilla_laboral.php");
require_once ("functions.php");

class Ctrl_formulario_login{

    public function verificar_acceso(){
        $acceso     = [];
        
        // Verificar si se ha enviado el formulario
        if (isset($_POST['sbmt_formAcceso'])) {

            $datosAcceso = array(
                'username' => sanitizar($_POST['username']),
                'userpass' => md5($_POST['userpass'])
            );

            //Verificar si existe el usuario
            $acceso = Mdl_plantilla_laboral::verificar_acceso($datosAcceso);

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

            }
        }
    }

}




