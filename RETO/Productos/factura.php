<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factura</title>
    <link rel="stylesheet" href="productos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="general2">
<div class="titulo col s12">
    <h2>Factura</h2>
</div>
<div class="factura">
    <?php
include_once('Conexion.php');

session_start();
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM usuarios WHERE id = :user_id OR telefono = :telefono OR email = :email";
$sentencia = $conexion->prepare($sql);
$sentencia->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
$sentencia->bindParam(':email', $email, PDO::PARAM_STR);
$sentencia->execute();

$user = $sentencia->fetch();

if ($user) {
    $username = $user['nombre'];
    $tel = $user['telefono'];
    $mail = $user['email'];

    $title = $_GET['title'];
    $price = $_GET['price'];
  
    echo $username;
    echo "Título: $title<br>";
    echo $price;
    echo $tel;
    echo $mail;
} else {
    echo "Usuario no encontrado.";
}
?>

<button href="inicio.php">
    volver
<i class="material-icons right">subdirectory_arrow_left</i>
</button>
    </div>
</div>
</body>
</html>
