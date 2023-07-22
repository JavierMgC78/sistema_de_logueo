<?php

include_once ('ctrls/tablas/Ctrl_url_opciones.php');
$pages = Ctrl_url_opciones::obtener_url_opciones();
//print_r($pages);

?>

<ul>
    <li><a href="/inicio">Inicio</a></li>
    <li><a href="/cobranza/cobrar">Cobrar</a></li>
    <li><a href="/salir">Salir</a></li>
</ul>