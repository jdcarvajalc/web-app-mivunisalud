<?php
// index.php
// require_once 'controllers/AuthenticateController.php';
require_once 'app/config/config.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'login';

switch ($page) {
    case 'login':
        include 'app/views/pages/vistaInicioSesion.php';
        break;
    case 'authenticate':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
        } else {
            header("location: /login");
        }
        break;
    case 'home':
        include 'app/views/pages/vistaInicio.php';
        break;
    case 'reports':
        include 'app/views/pages/vistaReportes.php';
        break;
    case 'graphs':
        include 'app/views/pages/vistaGraficas.php';
        break;
    case 'logout':
        break;
    default:
        header("location: /login");
        break;
}
