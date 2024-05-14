<?php require_once '../../config/config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once '../includes/head.php' ?>
  <title>Gráficas</title>
  <link rel="shortcut icon" href=<?php echo FROM_PAGES_TO_IMAGES . "/Logo-solo-agost.png" ?> />
  <link rel="stylesheet" href="<?php echo FROM_PAGES_TO_STYLES . '/estilosGraficas.css' ?>" />
</head>

<body>

  <?php require_once '../includes/navbar.php' ?>

  <main>
    <section class="contenedor-mes">
      <form action="vistaGraficas.php" method="POST">

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

    <section class="cont">
      <div id="contenido-div1" class="card">
        <div id="cargaLineal" class="mi-grafica"></div>
      </div>

      <div id="contenido-div2" class="card">
        <div id="cargaLineal2" class="mi-grafica"></div>
      </div>
    </section>
  </main>
</body>

</html>

<?php require_once FROM_PAGES_TO_CONTROLLERS . '/controladorGraficas.php'; ?>