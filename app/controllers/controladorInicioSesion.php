<?php
session_start();
require_once '../models/modeloInicioSesion.php';
require_once '../config/config.php';
$b_url = BASE_URL;

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    header("location: $b_url/home");
    exit;
}

if ($array['contar'] > 0) {
    header("location: $b_url/home");
    $_SESSION['auth'] = true;
} else {
    $_SESSION['auth'] = false;
    echo
    "<script>
            confirm('Datos incorrectos')
            open('$b_url/login ')
            close('$b_url/app/controllers/controladorInicioSesion.php')
        </script>";
}
