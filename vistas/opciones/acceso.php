<?php
require_once ("ctrls/paginas/Ctrl_pagina_acceso.php");
require_once ("functions.php");

$acceder = new Ctrl_pagina_acceso();
?>


<div>
    <div>
        <!-- logo -->
    </div>
    <div>
        <h2>Inicio de sesión</h2>
    </div>
    <div>
        <form id="formAcceso" action="" method="POST">
            <input type="text" name="name_user" id="" placeholder="Usuario">
            <input type="password" name="pass_user" id="" placeholder="Contraseña">
        </form>
    </div>
    <div>
        <?php $acceder->verificar_acceso(); ?>
    </div>
    <div>
        <input form="formAcceso" type="submit" name="sbmt_formAcceso" value="Ingresar">
    </div>
</div>