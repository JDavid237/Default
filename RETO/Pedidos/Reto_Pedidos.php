<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="Reto_Pedidos.css">
    <script src="https://kit.fontawesome.com/027f6cc223.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="general">
        <div class="head">
            <h1><i class="fa-solid fa-burger fa-lg icon" ></i>ezburgers<i class="fa-solid fa-burger fa-lg icon"></i></h1>
        </div>

        <form action="Factura.php" method="post">
            <div class="user">
                <h3>Nombre: <input type="text" placeholder="Ingresar Nombre" name="nombre"></h3>
                <h3>Direccion: <input type="text" placeholder="Ingresar Direccion" name="direccion"></h3>
                <h3>Telefono: <input type="text" placeholder="Ingresar telefono" name="telefono"></h3>

                <?php
                if ($_POST) {
                    $nombre = $_POST['nombre'];
                    $direccion = $_POST['direccion'];
                    $telefono = $_POST['telefono'];
                }
                ?>
            </div>
            <div>
                <h2 class="letras">¿Como desea su pedido?</h2>
                <section class="pedido">
                    <div class="primero">
                        <div class="ajuste">
                            <h3>Sencilla <input type="checkbox" name="sencilla"></h3>
                            <h3>Cantidad <input type="number" name="cantidad1"></h3>
                            <?php if ($_POST) {
                                $cantidad1 = $_POST['cantidad1'];
                            } ?>
                            <h3>
                                <?php echo 'Precio: 10000 ';
                                if (!empty($cantidad1) && $cantidad1 > 0) {
                                    echo 'Precio total: ' . 10000 * $cantidad1;
                                } ?>
                            </h3>

                        </div>

                        <div class="ajuste">
                            <h3>Doble queso <input type="checkbox" name="dobleq"></h3>
                            <h3>Cantidad <input type="number" name="cantidad2"></h3>
                            <?php if ($_POST) {
                                $cantidad2 = $_POST['cantidad2'];
                            } ?>
                            <h3>
                                <?php echo 'Precio: 12000 ';
                                if (!empty($cantidad2) && $cantidad2 > 0) {
                                    echo 'Precio total:' . 12000 * $cantidad2;
                                } ?>
                            </h3>

                        </div>

                        <div class="ajuste">
                            <h3>Doble carne <input type="checkbox" name="doblec"></h3>
                            <h3>Cantidad <input type="number" name="cantidad3"></h3>
                            <?php if ($_POST) {
                                $cantidad3 = $_POST['cantidad3'];
                            } ?>
                            <h3>
                                <?php echo 'Precio: 14000 ';
                                if (!empty($cantidad3) && $cantidad3 > 0) {
                                    echo 'Precio total:' . 14000 * $cantidad3;
                                } ?>
                            </h3>

                        </div>
                    </div>

                    <div class="segundo">
                        <div class="ajuste">
                            <h3>especial tocineta doble <input type="checkbox" name="especial"></h3>
                            <h3>Cantidad <input type="number" name="cantidad4"></h3>
                            <?php if ($_POST) {
                                $cantidad4 = $_POST['cantidad4'];
                            } ?>
                            <h3>
                                <?php echo 'Precio: 15000 ';
                                if (!empty($cantidad4) && $cantidad4 > 0) {
                                    echo 'Precio total:' . 15000 * $cantidad4;
                                } ?>
                            </h3>
                        </div>

                        <div class="ajuste">
                            <h3>Aguacate y huevo <input type="checkbox" name="aguacate"></h3>
                            <h3>Cantidad <input type="number" name="cantidad5"></h3>
                            <?php if ($_POST) {
                                $cantidad5 = $_POST['cantidad5'];
                            } ?>
                            <h3>
                                <?php echo 'Precio: 15000 ';
                                if (!empty($cantidad5) && $cantidad5 > 0) {
                                    echo 'Precio total:' . 15000 * $cantidad5;
                                } ?>
                            </h3>

                        </div>

                        <div class="ajuste">
                            <h3>Combo cine papas y gaseosa <input type="checkbox" name="combo"></h3>
                            <h3>Cantidad <input type="number" name="cantidad6"></h3>
                            <?php if ($_POST) {
                                $cantidad6 = $_POST['cantidad6'];
                            } ?>
                            <h3>
                                <?php echo 'Precio: 20000 ';
                                if (!empty($cantidad6) && $cantidad6 > 0) {
                                    echo 'Precio total:' . 20000 * $cantidad6;
                                } ?>
                            </h3>

                        </div>

                    </div>
                    
                    <button type="submit" id="boton1" name="confirmar">Confirmar </button>
                    
                    


                    <?php
                    if ($_POST) {
                        if (isset($_POST['confirmar'])) {
                            if (empty($nombre) || empty($direccion) || empty($telefono)) {
                                echo '<div class="confirmar">Introduce tu informacion </div>';
                                die();
                            } else {

                                if (!isset($_POST['sencilla']) && !isset($_POST['sencilla']) && !isset($_POST['sencilla']) && !isset($_POST['sencilla']) && !isset($_POST['sencilla']) && !isset($_POST['sencilla'])) {
                                    echo '<div class="confirmar">Por favor llena los campos correctamente </div>';
                                    die();
                                } else {
                                    echo '<script>document.getElementById("boton1").style.display = "none";</script>';
                                }
                            }
                        }
                    }

                    ?>









                </section>

            </div>
        </form>
    </div>
</body>

</html>