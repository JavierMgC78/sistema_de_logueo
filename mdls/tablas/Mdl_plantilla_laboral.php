<?php
require_once ("mdls/Conexion.php");

class Mdl_plantilla_laboral{

    static public function verificar_acceso($datosAcceso){
        $conexion = Conexion::conectar();
        $resp = [];

        $query = "  SELECT id_plantilla_laboral, username, userpass
                    FROM plantilla_laboral
                    WHERE username=:username
                    AND userpass=:userpass";

        try{

            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':username', $datosAcceso['username'], PDO::PARAM_STR);
            $stmt->bindParam(':userpass', $datosAcceso['userpass'], PDO::PARAM_STR);
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




