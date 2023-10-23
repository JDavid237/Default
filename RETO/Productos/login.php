<?php

session_start();

include_once 'Conexion.php';

$usuario_login = $_POST['nombre_usuario'];
$contraseña_login = $_POST['contrasena'];

$sql = 'SELECT * FROM usuarios WHERE nombre=?';
$sentencia = $conexion->prepare($sql);
$sentencia->execute(array($usuario_login));

$result = $sentencia->fetch();

if (!$result) {
    echo 'No existe usuario';
    die();
}


if (password_verify($contraseña_login, $result['contrasena'])) {
    $_SESSION['admin'] = $usuario_login;
    
    $user_id = $result['id'];
    $_SESSION['user_id'] = $user_id;
    header('location:inicio.php');
} else {
    echo 'No son iguales las contraseñas';
    die();
}
