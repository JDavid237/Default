<?php
include_once 'Reto_Pedidos.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>

<body>
    <section class="general2">
        <div class="letras">
            <h2>Factura</h2>
        </div>
        <div class="organized">
            <div class="user2">
                <?php
if ($_POST) {
    echo '<h3>Nombre:<br>' . $nombre;
    echo '<h3>Direccion:<br>' . $direccion;
    echo '<h3>Telefono:<br>' . $telefono;
} ?>
            </div>

            <div class="factura">
                <?php
echo '<h3>Compraste: <br>';
$total = 0;
if ($cantidad1 > 0) {
    echo $cantidad1 . ' hamburguesas sencillas ';
    echo ': ' . 10000 * $cantidad1 . '<br>';
    $total = $total + 10000 * $cantidad1;
}

if ($cantidad2 > 0) {
    echo $cantidad2 . ' hamburguesas doble queso ';
    echo ': ' . 12000 * $cantidad2 . '<br>';
    $total = $total + 12000 * $cantidad2;
}
if ($cantidad3 > 0) {
    echo $cantidad3 . ' hamburguesas doble carne ';
    echo ': ' . 14000 * $cantidad3 . '<br>';
    $total = $total + 14000 * $cantidad3;
}if ($cantidad4 > 0) {
    echo $cantidad4 . ' hamburguesas especial tocineta ';
    echo ': ' . 15000 * $cantidad4 . '<br>';
    $total = $total + 15000 * $cantidad4;
}if ($cantidad5 > 0) {
    echo $cantidad5 . ' hamburguesas de aguacate y huevo ';
    echo ': ' . 15000 * $cantidad5 . '<br>';
    $total = $total + 15000 * $cantidad5;
}if ($cantidad6 > 0) {
    echo $cantidad6 . ' combos cine con papas y gaseosa ';
    echo ': ' . 20000 * $cantidad6 . '<br>';
    $total = $total + 20000 * $cantidad6;
}

$iva = $total * 19 / 100;
echo 'Total de las hamburguesas: ' . $total . '<br>';
echo 'Iva(19%): ' . $iva . '<br>';
echo 'Total con iva: ' . $total + $iva . '<br>';
echo 'Domicilio: 2000 ';
echo 'Valor total: ' . $total + $iva + 2000 . '<br>';
?>

            </div>
        </div>
        <div class="agradecimiento">
            <?php
echo '<h3> Muchas Gracias por su compra ' . $nombre . ' Lo esperamos nuevamente';
?>      
      
    
         
        
        </div>
        <h3> <a href="Reto_Pedidos.php" class="volver">volver</a></h3>
    </section>

</body>

</html>