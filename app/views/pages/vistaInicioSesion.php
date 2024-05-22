<?php
session_start();
$b_url = BASE_URL;

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    header("location: $b_url/home");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/images/Logo-solo-agost.png"> <!-- Para agregar el ícono favicon -->
    <script src="https://kit.fontawesome.com/00121ead02.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo FROM_PAGES_TO_STYLES . '/estilosInicioSesion.css' ?>" />
    <title>Inicio de sesión</title>
</head>

<body>
    <div class="contenidoNormal">
        <div class="contenedorImagen">
            <img src="<?php echo FROM_PAGES_TO_IMAGES . "/Logo-general.png" ?>" alt="logo de la compañia">
        </div>

        <div class="formulario">
            <img src="<?php echo FROM_PAGES_TO_IMAGES . '/Logo-solo-agost.png' ?>" alt="logo de la compañia">
            <h1>Iniciar Sesión </h1>

            <form action="<?php echo FROM_PAGES_TO_CONTROLLERS . '/controladorInicioSesion.php' ?>" method="POST">
                <!-- USER -->
                <label for="username">
                    <i class="fa-solid fa-user"></i>
                    Usuario
                </label>
                <input type="text" placeholder="Ingrese usuario" id="pUsuario" name="user" required>

                <!-- PASSWORD -->
                <label for="password">
                    <i class="fa-solid fa-key"></i>
                    Contraseña
                </label>
                <input type="password" placeholder="Ingrese contraseña" id="pContra" name="pass" required>

                <input type="submit" name="ingresar" value="INGRESAR">
            </form>
        </div>
    </div>
    <div class="contenidoEnCelular">
        <div class="contenedorTarjetaInformativa">
            <img src="<?php echo FROM_PAGES_TO_IMAGES . '/Logo-general.png' ?>" alt="logo de la compañia">
            <h1>¡Por favor ingrese desde un computador!</h1>
        </div>
    </div>
</body>

</html>