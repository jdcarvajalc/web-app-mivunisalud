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
  <title>Inicio</title>
  <link rel="stylesheet" href="<?php echo FROM_PAGES_TO_STYLES . '/estilosInicio.css' ?>" />
</head>

<body>

  <?php include 'app/views/includes/navbar.php' ?>

  <main id="seccionMain">

    <section class="seccionTitulo">
      <br />
      <h1>
        ¿Qué tiene a su disposición?
      </h1>
      <br />
    </section>

    <section class="seccionTarjetasInformativas">
      <div id="cardTablas" class="card">
        <img src=<?php echo FROM_PAGES_TO_IMAGES . "/tiempo-real.png" ?> class="card-img-top" alt="iconoGraficas" />
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold; color: #E40C7B;">REPORTES</h5>
          <hr />
          <p class="card-text">
            Para que pueda descargar los registros de temperatura y humedad, en los meses
            que usted necesite.
          </p>
        </div>
      </div>
      <div id="cardGraficas" class="card">
        <img src=<?php echo FROM_PAGES_TO_IMAGES . "/iconoGraficas.png" ?> class="card-img-top" alt="iconoGraficas" />
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold; color: #E40C7B">GRÁFICAS</h5>
          <hr />
          <p class="card-text">
            Para que pueda observar de forma lineal los registros de temperatura y
            humedad, en los días que usted necesite.
          </p>
        </div>
      </div>
    </section>

    <svg style="margin-top: -170px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0E2A47" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,208C640,203,800,149,960,154.7C1120,160,1280,224,1360,256L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>

    <section class="secccionMapaGoogleUnidadDeSalud" style=" padding: 30px;">
      <div class="contenedorTituloUbicacion" style="display: flex; justify-content: center;">
        <h1 style="color: #E40C7B; font-weight: bold; text-transform: uppercase; margin-right: 20px;">
          Ubicación de
        </h1>
        <h1 style="color: #F0F3FC; font-weight: bold; text-transform: uppercase">
          Agost+
        </h1>
      </div>
      <div style="width: 100%">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.1667455452416!2d-76.59851372552951!3d2.451513557045925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3003004712671d%3A0x1b0b64f9468ad50e!2sUnidad%20Medica%20AGOST%2B%20S.A.S.!5e0!3m2!1ses-419!2sco!4v1717161887344!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

  </main>
</body>

</html>