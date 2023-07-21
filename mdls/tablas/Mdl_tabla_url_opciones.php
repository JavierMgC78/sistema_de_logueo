<?php
    include_once ('mdls/Conexion.php');

    class Mdl_tabla_url_opciones{

        static public function obtener_url_opciones(){
            $conexion = Conexion::conectar();
            $resp = [];

            $query = "  SELECT *
                        FROM URL_OPCIONES";

            try{
                $stmt = $conexion->prepare($query);
                $stmt->execute();

                $resp = [
                    'queryResp' => $stmt->fetchAll(PDO::FETCH_ASSOC),
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