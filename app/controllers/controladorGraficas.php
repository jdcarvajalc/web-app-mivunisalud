<?php

require FROM_PAGES_TO_MODELS . '/modeloGraficasTemperaturaManana.php';
require FROM_PAGES_TO_MODELS . '/modeloGraficasTemperaturaTarde.php';
require FROM_PAGES_TO_MODELS . '/modeloGraficasHumedadManana.php';
require FROM_PAGES_TO_MODELS . '/modeloGraficasHumedadTarde.php';

// Codificando los valores en formato JSON para usarlos en el FrontEnd
$datosX_Temperatura_m = json_encode($valoresX_Temperatura_m);
$datosY_Temperatura_m = json_encode($valoresY_Temperatura_m);

$datosX_Humedad_m = json_encode($valoresX_Humedad_m);
$datosY_Humedad_m = json_encode($valoresY_Humedad_m);

$datosX_Temperatura_t = json_encode($valoresX_Temperatura_t);
$datosY_Temperatura_t = json_encode($valoresY_Temperatura_t);

$datosX_Humedad_t = json_encode($valoresX_Humedad_t);
$datosY_Humedad_t = json_encode($valoresY_Humedad_t);

echo
"<script>
        var numeroAreaSeleccionada = " . $area . ";" .
    "var diaSeleccionado = " . $diaSeleccionado . ";" .
    "var mesSeleccionado = " . $mesSeleccionado . ";" .
    "var anioSeleccionado = " . $anioSeleccionado . ";
    </script>";

?>

<script src=<?php echo FROM_PAGES_TO_JS . '/crearCadenaLineal.js' ?>> </script>
<script src=<?php echo FROM_PAGES_TO_JS . '/generadorDeGraficas.js' ?>> </script>

<!-- Generar gráfica de Temperatura Mañana-->
<script type="text/javascript">
    datosX_Temperatura_m = crearCadenaLineal('<?php echo $datosX_Temperatura_m ?>');
    datosY_Temperatura_m = crearCadenaLineal('<?php echo $datosY_Temperatura_m ?>');

    var data = generarGraficasTemp_Diarias(datosX_Temperatura_m, datosY_Temperatura_m, 'temp');

    var layout = generarLayoutDiarias("GRÁFICAS DIARIAS TEMPERATURA - MAÑANA", "TEMPERATURA [ °C ]", [5, 35])

    var config = {
        responsive: true
    };

    Plotly.newPlot('cargaLineal', data, layout, config);
</script>

<!-- Generar gráfica de Temperatura Tarde-->
<script type="text/javascript">
    datosX_Temperatura_t = crearCadenaLineal('<?php echo $datosX_Temperatura_t ?>');
    datosY_Temperatura_t = crearCadenaLineal('<?php echo $datosY_Temperatura_t ?>');

    var data = generarGraficasTemp_Diarias(datosX_Temperatura_t, datosY_Temperatura_t, 'temp');

    var layout = generarLayoutDiarias("GRÁFICAS DIARIAS TEMPERATURA - TARDE", "TEMPERATURA [ °C ]", [5, 35])

    var config = {
        responsive: true
    };

    Plotly.newPlot('cargaLineal3', data, layout, config);
</script>

<!-- Generar gráfica de Humedad Mañana-->
<script type="text/javascript">
    datosX_Humedad_m = crearCadenaLineal('<?php echo $datosX_Humedad_m ?>');
    datosY_Humedad_m = crearCadenaLineal('<?php echo $datosY_Humedad_m ?>');

    var data = generarGraficasHum_Diarias(datosX_Humedad_m, datosY_Humedad_m, "hum");

    var layout = generarLayoutDiarias("GRÁFICAS DIARIAS HUMEDAD - MAÑANA", "HUMEDAD [ % ]", [35, 75])

    var config = {
        responsive: true
    };

    Plotly.newPlot('cargaLineal2', data, layout, config);
</script>

<!-- Generar gráfica de Humedad Tarde-->
<script type="text/javascript">
    datosX_Humedad_t = crearCadenaLineal('<?php echo $datosX_Humedad_t ?>');
    datosY_Humedad_t = crearCadenaLineal('<?php echo $datosY_Humedad_t ?>');

    var data = generarGraficasHum_Diarias(datosX_Humedad_t, datosY_Humedad_t, "hum");

    var layout = generarLayoutDiarias("GRÁFICAS DIARIAS HUMEDAD - TARDE", "HUMEDAD [ % ]", [35, 75])

    var config = {
        responsive: true
    };

    Plotly.newPlot('cargaLineal4', data, layout, config);
</script>

<script>
    var areaSeleccionada;
    (numeroAreaSeleccionada == 1) ? areaSeleccionada = "Almacenamiento": areaSeleccionada = "Dispensación";
    document.getElementById('presentarArea').innerHTML = areaSeleccionada;
    document.getElementById("presentarDia").innerHTML = diaSeleccionado;
    document.getElementById("presentarMes").innerHTML = mesSeleccionado;
    document.getElementById("presentarAnio").innerHTML = anioSeleccionado;
</script>