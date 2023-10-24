<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factura</title>
    <link rel="stylesheet" href="producto.css">
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
  
    echo "<h4>Compra realizada ".$username."</h4>";
    echo "<h5>Título: </h5>". "<h6>".$title."</h6>";
    echo "<h5>Telefono: </h5>". "<h6>".$tel."</h6>";
    echo "<h5>Email: </h5>". "<h6>".$mail."</h6>";
    echo "<h5>".$price."</h5>";
} else {
    echo "Usuario no encontrado.";
}
?>
<a href="inicio.php">
<button>
    volver
<i class="material-icons right">subdirectory_arrow_left</i>
</button>
</a>
    </div>
</div>
</body>
</html>
