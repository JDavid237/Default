<?php
session_start();
include_once 'Conexion.php';

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = 'SELECT * FROM usuarios WHERE nombre = ? OR telefono = ? OR email = ?';
$sentencia = $conexion->prepare($sql);
$sentencia->execute(array($usuario_nuevo, $telefono, $email));
$result = $sentencia->fetch();


if ($result) {
    if ($result['nombre'] == $usuario_nuevo) {
        $_SESSION['error'] = 'Ya existe un usuario con el mismo nombre';
        header('location:Sesion.php');
        die();
    }
    if ($result['telefono'] == $telefono) {
        $_SESSION['error'] = 'Ya existe un usuario con el mismo teléfono';
        header('location:Sesion.php');
        die();
    }
    if ($result['email'] == $email) {
        $_SESSION['error'] = 'Ya existe un usuario con el mismo email';
        header('location:Sesion.php');
        die();
    }
}

$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

if (empty($usuario_nuevo) || empty($telefono) || empty($email)) {
    $_SESSION['error'] = 'Por favor no deje campos vacíos';
    header('location:Sesion.php');

} else {
    if (empty($contrasena) || empty($contrasena2)) {
        $_SESSION['error'] = 'Por favor ingrese una contraseña y verifíquela';
        header('location:Sesion.php');
    } else {
        if (password_verify($contrasena2, $contrasena)){;
            try {
                $sql_agregar = 'INSERT INTO usuarios (nombre, contrasena, telefono, email) VALUES (?,?,?,?)';
                $sentencia_agregar = $conexion->prepare($sql_agregar);
            
                if ($sentencia_agregar->execute(array($usuario_nuevo, $contrasena, $telefono, $email))) {
                    $_SESSION['error'] = 'Usuario agregado';
                    header('location:Sesion.php');
                    
                } else {
                    $_SESSION['error'] = 'Error al agregar el usuario';
                    header('location:Sesion.php');
                }
            
                $sentencia_agregar = null;
                $conexion = null;
            } catch (PDOException $e) {
                
                if ($e->errorInfo[1] == 1062) {
                    $_SESSION['error'] = 'Ya existe un usuario con el mismo teléfono';
                    header('location:Sesion.php');
                    }
                }
            }else {
                if ($contrasena!=$contrasena2){
                    $_SESSION['error'] = 'La contraseña debe ser igual';
                    header('location:Sesion.php');
                }else{
                $_SESSION['error'] = 'La contraseña no es válida.';
                header('location:Sesion.php');
                }
                
        }
    }
}