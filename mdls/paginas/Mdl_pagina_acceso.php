<?php
require_once ("mdls/Conexion.php");

class Mdl_pagina_acceso{

    static public function verificar_acceso($datosAcceso){
        $conexion = Conexion::conectar();
        $resp = [];

        $query = "  SELECT *
                    FROM VISTA_USERS
                    WHERE NAME_USER=:NAME_USER
                    AND PASS_USER=:PASS_USER";

        try{

            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':NAME_USER', $datosAcceso['name_user'], PDO::PARAM_STR);
            $stmt->bindParam(':PASS_USER', $datosAcceso['pass_user'], PDO::PARAM_STR);
            $stmt->execute();

            $resp = [
                'queryResp' => $stmt->fetchColumn(),
                'count'     => $stmt->rowCount(),
                'errorCode' => $stmt->errorCode(),
                'errorInfo' => $stmt->errorInfo()
            ];

        }catch(PDOException $e){
            $resp = [
                'queryResp' => null,
                'count'     => null,
                'errorCode' => $e->getCode(),
                'errorInfo' => $e->getMessage()
            ];
        }

        return $resp;

    }

}




