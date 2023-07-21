<?php
    // REQUERIMIENTOS

    // HEADER Y MENÚ
    require_once ("vistas/plantillas/elementos/header.php");
    require_once ("vistas/plantillas/elementos/menu.php");

    include_once ('ctrls/tablas/Ctrl_tabla_url_opciones.php');
    $pages = Ctrl_tabla_url_opciones::obtener_url_opciones();

    // CUERPO
    if(!isset($_GET['depto']) && !isset($_GET['op'])){
        require_once ("vistas/opciones/inicio.php");
    }


    if(!isset($_GET['depto']) && isset($_GET['op'])){
        $urlCompleta = "";
        $urlEncontrada = false;

        //Buscar el componente de ruta
        foreach($pages['queryResp'] as $key => $value){
            if($_GET['op'] == $value['componente_ruta']){
                $urlCompleta = $value['url'];
                $urlEncontrada = true;
            }
        }

        //Llamar la página seleccionada si se encuetra en la base de datos
        if($urlEncontrada){
            require_once ($urlCompleta);

        }else{
            //Si no se econtro la página seleccionada ir a 404
            include_once $url = ($urlEncontrada) == true ? $url = $urlCompleta : $url = 'vistas/opciones/404.php';
        }
    }


    if(isset($_GET['depto']) && isset($_GET['op'])){
        $urlCompleta = "";
        $urlEncontrada = false;

        //Buscar el componente de ruta
        foreach($pages['queryResp'] as $key => $value){
            if($_GET['depto'] == $value['departamento'] && $_GET['op'] == $value['componente_ruta']){
                $urlCompleta = $value['url'];
                $urlEncontrada = true;
            }
        }

        //Llamar la página seleccionada si se encuetra en la base de datos
        if($urlEncontrada){
            require_once ($urlCompleta);

        }else{
            //Si no se econtro la página seleccionada ir a 404
            include_once $url = ($urlEncontrada) == true ? $url = $urlCompleta : $url = 'vistas/opciones/404.php';
        }
    }

?>

</body>
</html>


