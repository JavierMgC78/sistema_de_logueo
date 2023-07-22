# INDICE
- Sistema de logueo
- Tablas
- Como conectarse a la base de datos



# SISTEMA DE LOGUEO
Sistema de logueo básico con php y js y por medio del sistema modelo/vista/controlador acceder a diferente contenido mediante un sistema de plantillas.

El sistema está enfocado a llevar la administración y control de ciertos procesos de una empresa pequeña o mediana.

Se pueden crear usuarios, opciones y asignar opciones especificas a usuarios específicos, por ejemplo un usuario del depto de cobranza se le pueden asignar las opciones de cobrar, corregir datos del cliente, etc. 
 
# TABLAS
## Tabla 'personas'
Contiene los datos de las personas que trabajan en la empresa

- id_persona
- nombres
- apelliod_p
- apelliod_m
- curp
- tel
- correo
- created_at
- created_for
- updated_at
- updated_for

## TABLA 'cargos'
Contiene los datos del rol que ejerce la persona en la empresa, asi como su usario y clave de acceso al sistema

- id_cargo
- id_persona
- username
- userpass
- id_rol
- created_at
- created_for
- updated_at
- updated_for



# COMO CONECTARSE A LA BASE DE DATOS
1- Crear un archivo en la raiz del sistema llamado dataAccess.php.
2- Crear la siguiente estreuctura llenando los datos correspondientes a la base de datos.
    <?php
        $dbData = ['db' => "mysql:host=localhost;dbname=nombre_de_la_base_de_datos", 'user' => 'nombre_de_usuario', 'pass' => 'clave_de_usuario'];
        
        $GLOBALS['dbData'] = $dbData;
    ?>



