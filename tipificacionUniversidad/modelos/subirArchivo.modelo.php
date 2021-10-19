<?php
require_once "conexionLogin.php";

class ModeloSubirArchivos
{
    static public function mdlMostrarSubirArchivos($tabla, $item, $valor)
    {

        if ($item != null && $valor != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        }
        $stmt = null;
    }
    static public function mdlRegistroSubirArchivo($mysqli, $sql)
    {
        $respuesta = $mysqli->query($sql);

        if ($respuesta) {
            return "ok";
        } else {
            echo "ERROR, NO S EPUDO MOSTRar la tabla";
        }

        echo $respuesta;
    }
}
