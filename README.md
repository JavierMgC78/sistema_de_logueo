# sistema_de_logueo
Sistema de logueo con php y js usando el concepto de modelo/vista/controlador para acceder al sistema que carga contenido mediante plantillas. 


# CONECTARSE A LA BASE DE DATOS
1- Crear un archiovo en la raiz del sistema llamado dataAccess.php.
2- Crear la siguiente estreuctura.
    <?php
        $dbData = ['db' => "mysql:host=localhost;dbname=nombre_de_la_base_de_datos", 'user' => 'nombre_de_usuario', 'pass' => 'clave_de_usuario'];
        
        $GLOBALS['dbData'] = $dbData;
    ?>
3- Llenar los datos de acceso a la base de datos.


