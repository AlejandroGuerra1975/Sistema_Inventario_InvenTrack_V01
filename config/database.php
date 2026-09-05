<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "inventrack_db";

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

if (!$conexion){
    die("Error de conexión:" . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");

?>