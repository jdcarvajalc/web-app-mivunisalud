<?php
require_once 'app/config/config.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$sql = "SELECT hora,hum,fecha,area 
			FROM registros 
			WHERE DAY(fecha) = '$diaSeleccionado'
			AND MONTH(fecha) = '$mesSeleccionado'
			AND YEAR(fecha) = '$anioSeleccionado'
			AND area = '$area'
			AND (
					(TIME(hora) BETWEEN '12:00:00' AND '23:59:59')
				)
			ORDER BY hora ";

$result = mysqli_query($conn, $sql);


$valoresY_Humedad_t = array(); //montos
$valoresX_Humedad_t = array(); //fechas

while ($ver = mysqli_fetch_row($result)) {
	$valoresY_Humedad_t[] = $ver[1];
	$valoresX_Humedad_t[] = $ver[0];
}

// Cerrar la conexión
mysqli_close($conn);
