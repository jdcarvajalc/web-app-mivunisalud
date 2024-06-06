<?php
require_once '../config/config.php';

$area = $_POST['area'];
$temp = $_POST['temp'];
$hum = $_POST['hum'];
$date = $_POST['date'];
$timestamp = $_POST['timestamp'];

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // Aquí se hace la conexión a la base de datos.

// $fecha = date("Y-m-d");
// $hora = date("H:i:s");

$sql1 = "INSERT INTO registros (id, area, temp, hum, fecha, hora) 
            VALUES (NULL, '$area', '$temp', '$hum', '$date', '$timestamp')"; // Aquí se ingresa el valor recibido a la base de datos.

// Ejecutar la consulta y verificar si fue exitosa
if ($mysqli->query($sql1) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $mysqli->error;
}

// Cerrar la conexión
$mysqli->close();
