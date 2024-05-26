<?php
session_start();
$b_url = BASE_URL;
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
  header("location: $b_url/login");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'app/views/includes/head.php' ?>
  <title>Reportes</title>
  <link rel="stylesheet" href="<?php echo FROM_PAGES_TO_STYLES . '/estilosReportes.css' ?>" />
</head>

<body>
  <?php include 'app/views/includes/navbar.php' ?>

  <main>

    <section class="contenedor-mes">
      <form action="<?php echo BASE_URL . '/reports' ?>" method="POST">
        <label for="mes-seleccionado" class="etiqueta-select">Seleccione una fecha: </label>
        <input type="month" name="mes" class="mes-seleccionado" id="mes-seleccionado" value="">
        <select class="select" name="area"><option value="" hidden>Seleccione un área</option></select>
        <button id="consultar" type="submit" class="consulta">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      <button class="boton-reporte" id="descargar-pdf"><i class="fa-solid fa-download"></i> Reporte</button>
    </section>

    <section class="seccionInformacionFechas">
      <div class="contenedorInformacionFechas">
        <p class="etiquetaInformacionFechas">
          Mes:
        </p>
        <p class="informacionFechas" id="presentarMes"></p>
        <p class="etiquetaInformacionFechas">
          Año:
        </p>
        <p class="informacionFechas" id="presentarAnio"></p>
      </div>
    </section>

    <section id="seccion-tarjetas" class="cont" style="margin-top: -40px;">
      <div id="contenido-div1" class="card">
        <div id="cargaLineal" class="mi-grafica"></div>
      </div>

      <div id="contenido-div2" class="card">
        <div id="cargaLineal2" class="mi-grafica"></div>
      </div>

      <div id="contenido-div3" class="card">
        <div id="cargaLineal3" class="mi-grafica"></div>
      </div>

      <div id="contenido-div4" class="card">
        <div id="cargaLineal4" class="mi-grafica"></div>
      </div>
    </section>

  </main>
</body>

</html>

<?php require_once FROM_PAGES_TO_CONTROLLERS . '/controladorReportes.php'; ?>
