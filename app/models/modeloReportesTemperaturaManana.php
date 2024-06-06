<?php

require_once 'app/config/config.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$area = isset($_POST['area']) ? $_POST['area'] : '1';
$fecha = isset($_POST['mes']) ? $_POST['mes'] : '2023-06';

$mesSeleccionado = date('m', strtotime($fecha));
$anioSeleccionado = date('Y', strtotime($fecha));

$sql = "SELECT hora, temp, fecha, area
			FROM registros 
			WHERE MONTH(fecha) = '$mesSeleccionado'
			AND YEAR(fecha) = '$anioSeleccionado'
			AND area = '$area'
			-- RECORDAR SEPARAR MAÑANA Y TARDE
			AND (
					(TIME(hora) BETWEEN '08:55:00' AND '09:05:00')
				)
			ORDER BY fecha";

$result = mysqli_query($conn, $sql);

$valoresY_Temperatura_m = array(); //montos
$valoresX_Temperatura_m = array(); //fechas

while ($ver = mysqli_fetch_row($result)) {
	$valoresY_Temperatura_m[] = $ver[1];
	$valoresX_Temperatura_m[] = $ver[2];
}

// Cerrar la conexión
mysqli_close($conn);
