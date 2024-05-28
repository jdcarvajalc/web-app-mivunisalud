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
  <title>Gráficas</title>
  <link rel="stylesheet" href="<?php echo FROM_PAGES_TO_STYLES . '/estilosGraficas.css' ?>" />
</head>

<body>

  <?php include 'app/views/includes/navbar.php' ?>

  <main>
    <section class="contenedor-mes">
      <form action="<?php echo BASE_URL . '/charts' ?>" method="POST">

        <label for="mes-seleccionado" class="etiqueta-select">Seleccione una fecha: </label>

        <input type="date" name="dia" class="mes-seleccionado" id="mes-seleccionado" value="">

        <button id="consultar" type="submit" class="consulta">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>

      </form>
    </section>

    <section class="seccionInformacionFechas">
      <div class="contenedorInformacionFechas">
        <p class="etiquetaInformacionFechas">
          Día:
        </p>
        <p class="informacionFechas" id="presentarDia"></p>
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

    <section class="cont" style="margin-top: -40px;">
      <div id="contenido-div1" class="card">
        <div id="cargaLineal" class="mi-grafica"></div>
      </div>

      <div id="contenido-div2" class="card">
        <div id="cargaLineal2" class="mi-grafica"></div>
      </div>

      <div id="contenido-div3" class="card">
        <div id="cargaLineal3" class="mi-grafica"></div>
      </div>

      <div id="contenido-div" class="card">
        <div id="cargaLineal" class="mi-grafica"></div>
      </div>
    </section>
  </main>
</body>

</html>

<?php require_once FROM_PAGES_TO_CONTROLLERS . '/controladorGraficas.php'; ?>
