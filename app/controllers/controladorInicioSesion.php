<?php
require_once '../models/modeloInicioSesion.php';
require_once '../config/config.php';
$b_url = BASE_URL;

if ($array['contar'] > 0) {
    header("location: $b_url/home");
} else {
    echo
    "<script>
            confirm('Datos incorrectos')
            open('$b_url/login ')
            close('$b_url/app/controllers/controladorInicioSesion.php')
        </script>";
}
