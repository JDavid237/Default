<?php
include_once('Conexion.php');

session_start();
// Recibe los datos de la imagen desde la página del carrusel
$user_id = $_SESSION['user_id'];
// Recupera los datos del usuario desde la base de datos
$sql = "SELECT * FROM usuarios WHERE id = :user_id";
$sentencia = $conexion->prepare($sql);
$sentencia->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$sentencia->execute();

$user = $sentencia->fetch();

if ($user) {
    $username = $user['nombre'];

    $title = $_GET['title'];
    $description = $_GET['description'];
    $price = $_GET['price'];

    // Añade aquí la lógica para generar la factura en PDF o HTML
    // Por ejemplo, puedes utilizar una biblioteca como FPDF para crear un PDF de factura.

    // Muestra los detalles de la factura
    echo $username;
    echo "Título: $title<br>";
    echo "Descripción: $description<br>";
} else {
    echo "Usuario no encontrado.";
}