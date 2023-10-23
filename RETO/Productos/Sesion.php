<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="productos.css">
</head>

<body>

    <section class="general">
        <div class="formulario">
            <form action="login.php" class="col s12" method="post">

                <div class="row">
                
                <div class="ingreso">
                <h2>Ingresar usuario</h2>
                </div>
               
                <div class="f1">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="nombre_usuario">
                    <label for="icon_prefix">Usuario</label>
                </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline </i>
                        <input id="icon_lock_outline " type="password" class="validate" name="contrasena">
                        <label for="icon_lock_outline ">Contraseña</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </form>
        </div>


        <div class="formulario">
        <div class="registro">
                <h2>Registrarse</h2>
                </div>
            <form action="agregar_usuario.php" class="col s12" method="post">

                <div class="row">
               
                
                   
               
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix2" type="text" class="validate" name="nombre_usuario">
                        <label for="icon_prefix2">Usuario</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate" name="telefono">
                        <label for="icon_telephone">Telefono</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="icon_email" type="email" class="validate" name="email">
                        <label for="icon_email ">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline </i>
                        <input id="icon_lock_outline2 " type="password" class="validate" name="contrasena">
                        <label for="icon_lock_outline2 ">Contraseña</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_opem </i>
                        <input id="icon_lock_open" type="password" class="validate" name="contrasena2">
                        <label for="icon_lock_open">Comprueba la contraseña</label>
                    </div>
                    
                </div>
                <button class="btn waves-effect waves-light purple darken-4" type="submit" name="action">Registrar
                    <i class="material-icons right">control_point</i>
                </button>
               
            </form>
        </div>



        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>