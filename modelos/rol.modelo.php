<?php


class ModeloRol {

    /*=============================================
    Añadir roles
    =============================================*/
    static public function mdlRol($tabla, $datos){
        
        $sql = "INSERT INTO {$tabla} (role_nombre_roles )
         VALUES (:nombre_rol)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":nombre_rol",   $datos["role_nombre_roles"],   PDO::PARAM_STR);

        $ok = $stmt->execute();
        $stmt->closeCursor();
        return $ok ? "ok" : "error";
    }

    

}