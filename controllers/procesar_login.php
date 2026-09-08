<?php

session_start();

require "../config/database.php";

$usuario = trim($_POST['correo']);
$clave = $_POST['contrasena'];

// Consulta adaptada con la columna 'rol_id'
$sql = "SELECT id_usuario, correo, contrasena, rol_id FROM usuarios WHERE correo = ?";

/** @var \mysqli $conexion */
$consulta = $conexion->prepare($sql);
$consulta->bind_param("s", $usuario);
$consulta->execute();
$resultado = $consulta->get_result();

if($resultado->num_rows === 1){
    $fila = $resultado->fetch_assoc();

    // Verificación de contraseña (soporta hash o texto plano)
    if(password_verify($clave, $fila['contrasena']) || $clave === $fila['contrasena']){
        $_SESSION['usuario_id'] = $fila['id_usuario'];
        $_SESSION['correo'] = $fila['correo'];
        $_SESSION['rol_id'] = $fila['rol_id'];

        header("Location: ../index.php");
        exit;
    }
}

$_SESSION['error'] = "Usuario o contraseña incorrectos.";
header("Location: ../login.php");
exit;

?>