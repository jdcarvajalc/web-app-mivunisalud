<?php

require_once 'app/config/config.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$sql = "SELECT hora, temp, fecha, area 
			FROM registros 
			WHERE MONTH(fecha) = '$mesSeleccionado'
			AND YEAR(fecha) = '$anioSeleccionado'
			AND area = '$area'
			-- RECORDAR SEPARAR MAÑANA Y TARDE
			AND (
					(TIME(hora) BETWEEN '14:55:00' AND '15:05:00')
				)
			ORDER BY fecha";

$result = mysqli_query($conn, $sql);

$valoresY_Temperatura_t = array(); //montos
$valoresX_Temperatura_t = array(); //fechas

while ($ver = mysqli_fetch_row($result)) {
	$valoresY_Temperatura_t[] = $ver[1];
	$valoresX_Temperatura_t[] = $ver[2];
}

// Cerrar la conexión
mysqli_close($conn);
