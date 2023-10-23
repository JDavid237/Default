<?php

$link = 'mysql:host=localhost;dbname=productos';
$usuario = 'root';
$pass = '';

try {

    $conexion = new PDO($link, $usuario, $pass);

} catch (PDOException $e) {

    print "Error: " . $e->getMessage() . "<br>";
    die();
}
?>