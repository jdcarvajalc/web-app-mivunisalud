<link rel="stylesheet" href="<?php echo FROM_PAGES_TO_STYLES . '/estilosNavbar.css' ?>" />

<header>
  <a href="#" class="logo">
    <img src="public/images/Logo-solo-agost.png" alt="logo de la compañia" />
    <h2>SERVICIO FARMACÉUTICO</h2>
  </a>

  <div class="menu">
    <ul>
      <li>
        <a href="<?php echo BASE_URL . '/home' ?>">
          <i class="fa-solid fa-house"></i>
          Inicio
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL . '/reports' ?>">
          <!-- <i class="fa-sharp fa-solid fa-chart-line"></i> -->
          <i class="fa-regular fa-file"></i>
          Reportes
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL . '/graphs' ?>">
          <i class="fa-sharp fa-solid fa-chart-line"></i>
          Gráficas
        </a>
      </li>
      <li>
        <a id="cierre" href="<?php echo BASE_URL . '/logout' ?>">
          <i class="fa-solid fa-user-xmark"></i>
          Cerrar Sesión
        </a>
      </li>
    </ul>
  </div>
</header>