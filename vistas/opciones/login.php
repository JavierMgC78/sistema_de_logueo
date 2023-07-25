<?php
require_once ("ctrls/formularios/Ctrl_formulario_login.php");
require_once ("functions.php");

$acceder = new Ctrl_formulario_login();

?>


<div class="pantalla-acceso">
    <?php require_once (__DIR__ . "/../plantillas/elementos/plantilla_login/formulario_login.php"); ?>
</div>
