<?php
require_once ("ctrls/formularios/Ctrl_formulario_login.php");

$acceder = new Ctrl_formulario_login();

?>

<div class="cuadro-login">
        <div class="cuadro-login__logo">
            <img src="../../assets/img/logo.png" alt="Logo de la compañía">
        </div>
        <div class="cuadro-login__web">
            <h2>Nombre de la pagina web</h2>
        </div>
 
        <form class="cuadro-login__form" id="formAcceso" action="" method="POST">
            <div class="cuadro-login__input">
                <div class="cuadro-login__input__icon">
                    <span class="material-symbols-outlined">person</span>
                </div>
                <input type="text" name="username" id="" placeholder="Usuario">
            </div>
            <div class="cuadro-login__input">
                <div class="cuadro-login__input__icon">
                    <span class="material-symbols-outlined">key</span>
                </div>
                <input type="password" name="userpass" id="" placeholder="Contraseña">
            </div>
        </form>

        <div class="cuadro-login__msg">
            <?php $acceder->verificar_acceso(); ?>
        </div>

        <div class="cuadro-login__sbmt">
            <input form="formAcceso" type="submit" name="sbmt_formAcceso" value="Ingresar">
        </div>
    </div>