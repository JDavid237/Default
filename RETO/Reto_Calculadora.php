<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de descuentos</title>
    <style>
        body {
            display: flex;
            margin: 11% auto;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            background-image: url(img/ima.png);

        }

        .title {
            background-color: aquamarine;
            display: flex;
            flex-direction: column;
            font-size: 60px;
            font-weight: 900;
            margin: auto;
            justify-content: center;
            align-content: center;
            width: 40%;
            border-radius: 3px;
            box-shadow: 3px 3px white;
            border: 1px white solid;
            margin-bottom: 7px;
        }

        .general {
            background-color: aqua;
            display: flex;
            flex-direction: column;
            border-color: white;
            margin: auto;
            justify-content: center;
            align-content: center;
            width: 40%;
            border-radius: 3px;
            box-shadow: 3px 3px white;
            border: 1px white solid;

        }

        h2 {
            margin: 27px auto;
            font-size: 45px;
            font-weight: 700;
        }

        .resul {
            font-size: 30px;
            color: black;
            font-weight: 600;
            margin: 10px auto;
            margin-bottom: 15px;
            background-color: aqua;
            border-radius: 25px;
            border: 2px black solid;
            box-shadow: 3px 3px black;
            width: 50%;

        }

        input {
            margin: -7px auto;
            padding: 8px 10px;
            border: 1px black solid;
            box-shadow: 2px 2px black;
            border-radius: 5px;
        }

        input:hover {
            background-color: #F9F5F4;
        }

        button {
            font-size: 28px;
            color: black;
            font-weight: 700px;
            background-color: aquamarine;
            margin: 28px 0 15px 0;
            box-shadow: 2px 2px black;
            border: 1px black solid;
            border-radius: 5px;
        }

        button:hover {
            background-color: #4EEBBE;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="title">CALCULADORA</div>
    <div class="general">
        <form action="" method="POST">
            <h2>Ingresa el precio</h2>
            <input type="number" name="precio">
            <h2>Ingresa el descuento</h2>
            <input type="number" name="descuento">
            <br>
            <button type="submit">Calcula!!</button>
        </form>

        <?php
        if ($_POST) {
            $precio = $_POST['precio'];
            $descuento = $_POST['descuento'];
        }

        ?>

        <div class="resul">
            <?php
            if (empty($precio) || empty($descuento))
                echo 'Introduce ambos campos';
            else {
                $resultado = $precio * $descuento / 100;
                $resultado = $precio - $resultado;
                echo 'El resultado es: <br>' . $resultado;

            }
            ?>
        </div>
    </div>



</body>

</html>