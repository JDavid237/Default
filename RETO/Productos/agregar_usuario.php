<?php

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
        echo 'Ya existe un usuario con el mismo nombre';
        die();
    }
    if ($result['telefono'] == $telefono) {
        echo 'Ya existe un usuario con el mismo teléfono';
        die();
    }
    if ($result['email'] == $email) {
        echo 'Ya existe un usuario con el mismo email';
        die();
    }
}

$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

if (empty($usuario_nuevo) || empty($telefono) || empty($email)) {
    echo 'Por favor no deje campos vacíos';
} else {
    if (empty($contrasena) || empty($contrasena2)) {
        echo 'Por favor ingrese una contraseña y verifíquela';
    } else {
        if (password_verify($contrasena2, $contrasena)){;
            try {
                $sql_agregar = 'INSERT INTO usuarios (nombre, contrasena, telefono, email) VALUES (?,?,?,?)';
                $sentencia_agregar = $conexion->prepare($sql_agregar);
            
                if ($sentencia_agregar->execute(array($usuario_nuevo, $contrasena, $telefono, $email))) {
                    echo 'Agregado <br>';
                } else {
                    echo 'Error al agregar el usuario';
                }
            
                $sentencia_agregar = null;
                $conexion = null;
            } catch (PDOException $e) {
                
                if ($e->errorInfo[1] == 1062) {
                    echo 'Ya existe un usuario con el mismo teléfono';
                    }
                }
            }else {
            echo 'La contraseña no es válida.';
        }
    }
}