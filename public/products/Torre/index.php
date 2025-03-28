<?php
include '../../../model/autolad/conexcion.php';

// Consulta para Secciones activas
$querySecciones = "SELECT * FROM productos 
                   WHERE sector='Torres' 
                   AND categoria='SECCIONES' 
                   AND estado='Activo'";
$resultSecciones = mysqli_query($connect, $querySecciones);

// Consulta para Accesorios activos
$queryAccesorios = "SELECT * FROM productos 
                    WHERE sector='Torres' 
                    AND categoria='ACCESORTIOS' 
                    AND estado='Activo'";
$resultAccesorios = mysqli_query($connect, $queryAccesorios);

// Validar si hay resultados
if (!$resultSecciones || !$resultAccesorios) {
  die("Error en la consulta: " . mysqli_error($connect));
}
$base_url = "http://localhost/transformetal/app/app/";
?>
<!-- Copyright 2024  TRANSFORMETAL-->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRANSFORMETAL</title>
  <link rel="stylesheet" href="../../../assets/css/style.css">
  <link rel="stylesheet" href="../../../assets/css/chatbot.css">
  <link rel="stylesheet" href="../../../assets/css/footer.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../../assets/img/isotipo.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="../../css/Gabitenes.css">
</head>

<body onload="checkHash()">
  <!--Header Inicio-->|
  <header id="header">

    <div class="container-hero  position: fixed;">
      <div class="container hero">
        <div class="customer-support">
          <i class=""></i>
          <div class="content-customer-support">
            <span class="text"></span>
            <span class="number"></span>
          </div>
        </div>
        <div class="container-logo">
          <a href="../../../">
            <i><img src="../../../assets/img/logot.png" alt="100px" style="width: 500px; height: 100px; "></i>

          </a>
        </div>
        <div class="container-user">
          <i class=""></i>
          <i class=""></i>
          <div class="">
            <span class="text"></span>
            <span class="number"></span>
          </div>
        </div>
      </div>
    </div>

    <!--MEnu Inicio-->
    <div class="container-navbar">
      <nav class="navbar container">
        <input type="checkbox" id="check">
        <ul class="menu"><!--Menu-->
          <li id="nav2">
            <a href="#" id="productos-link" class="TituloMenu">Productos</a>
            <ul class="nav-menu" id="productos-submenu">
              <li>
                <a href="#" class="main-category">Telecomunicaciones e IT<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu ">
                  <li><a href="productos.php">Gabinetes</a></li>
                  <li><a href="productos.php#section2">Racks</a></li>
                  <li><a href="productos.php#section9">Bandejas</a></li>
                  <li><a href="productos.php#section3-1">Riel</a></li>
                  <li><a href="productos.php#section4-1">Escalerilla</a></li>
                  <li><a href="productos.php#section85">Planta Externa</a></li>
                  <li><a href="productos.php#section85">Planta Interna</a></li>
                  <li><a href=""></a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Planta Externa y Electricidad<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu plantaExterna">
                  <li><a href="productos.php">Gabinetes</a></li>
                  <li><a href="productos.php#section50">Cajas</a></li>
                  <li><a href="productos.php#section70">Herrajes</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Exhibición y Almacenes <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu Almacenes">
                  <li><a href="productos.php#Gondolas">Góndolas </a></li>
                  <li><a href="productos.php#Estanteria">Estanterías </a></li>
                  <li><a href="productos.php#RackIndustrial">Racks Industrial</a></li>
                  <li><a href="">Paneles decorativos</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Mobiliario Urbano <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu paneles">
                  <li><a href="productos.php#Arquitectonicos">Paneles Basureros</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Torres <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu TorresIrios">
                  <li><a href="./productos.php#section25">Torres Arriostradas y Accesorios</a></li>
                  <li><a href="./control/">Instalacion de torre arriostrada</a></li>
                  <li><a href="./control/SistemaTierra.php">Sistemas de puesta a tierra</a></li>
                  <li><a href="./control/pararrayos.php">Sistema de pararrayos y baliza </a></li>

                </ul>
              </li>

            </ul>
          </li>

          <!--menu2-->

          <!--menu2-->
          <!--fin menu-->
          <li id="nav2">
            <a href="#" id="industrias-link" class="TituloMenu">Sectores</a>
            <ul class="nav-menu" id="industrias-submenu">
              <li><a href="industrias.php#telecom">Telecomunicaciones</a></li>
              <li><a href="industrias.php#Electrico">Electricidad</a></li>
              <li><a href="industrias.php#Mobiliario">Mobiliario Urbano</a></li>
              <li><a href="industrias.php#Exhibicion">Exhibición y Almacenaje </a></li>
            </ul>
          </li>

          <li id="nav2">
            <a href="maquinaria.php" id="servicios-link" class="TituloMenu">Maquinaria</a>
          </li>

          <li>
            <a href="#" id="nosotros-link" class="TituloMenu">Nosotros</a>
            <ul class="nav-menu" id="nosotros-submenu">
              <li><a href="./public/Nosotros/">Nosotros</a></li>
              <li><a href="nosotros.php#staff">Equipo de gestión administrativa y comercial</a></li>
              <li><a href="#">Planta de Transformetal</a></li>
              <li><a href="#">Política de calidad</a></li>
              <li><a href="#">Responsabilidad Social Empresarial</a></li>
            </ul>
          </li>
          <li><a href="./contacto.php" class="TituloMenu">Contacto</a></li>
          <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
        </ul>
        <!-- Barra de búsqueda actualizada -->
        <form class="search-form" action="busqueda.php" method="get">
          <input type="search" name="query" placeholder="Buscar..." required>
          <button class="btn-search" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>

        <!--<i class="fas fa-shopping-cart" style="color: #fff; font-size: 25px; cursor: pointer;"></i>-->
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
      </nav>
    </div>
    <!--menu fin -->
  </header>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="section-main">
    <section class="section">
      <nav class="breadcrumb" id="breadcrumb">
        <a href="../../torre/">Torre Arriostrada ></a>
        <span class="active">Secciones</span>
      </nav>

      <div class="product-header">
        <h1 class="title-Product">Torres Arriostradas</h1>
        <p class="description">
          Descubre nuestra amplia gama de torres ariostradas en Transformetal, diseñadas para cumplir con sus necesidades en
          infraestructura de comunicaciones inalámbricas. Con una construcción sólida y estabilizada combinable, nuestras torres
          ofrecen resistencia y durabilidad excepcionales, incluso en condiciones climáticas adversas.
        </p>
      </div>

      <!-- Sección de Torres -->
      <section id="Secciones" class="product-list">
        <?php
        if (mysqli_num_rows($resultSecciones) > 0) {
          while ($row = mysqli_fetch_assoc($resultSecciones)) {
            $hash = md5($row['id'] . 'transformetal');
        ?>
            <div class="product-card">
              <img src="<?php echo $base_url . 'Control/' . htmlspecialchars($row['imagen_principal']); ?>"
                alt="<?php echo htmlspecialchars($row['nombre']); ?>">
              <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
              <div class="center">
                <a href="detalle.php?id=<?php echo urlencode($hash); ?>" class="cotizas">
                  <p>Ver producto</p>
                </a>
              </div>
            </div>
        <?php
          }
        } else {
          echo '<p class="no-products">No hay secciones disponibles</p>';
        }
        ?>
      </section>

      <!-- Sección de Accesorios -->
      <section id="Accesorios" class="product-list" style="display: none;">
        <?php
        if (mysqli_num_rows($resultAccesorios) > 0) {
          while ($row = mysqli_fetch_assoc($resultAccesorios)) {
            $hash = md5($row['id'] . 'transformetal');
        ?>
            <div class="product-card">
              <img src="<?php echo $base_url . 'Control/' . htmlspecialchars($row['imagen_principal']); ?>"
                alt="<?php echo htmlspecialchars($row['nombre']); ?>">
              <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
              <div class="center">
                <a href="detalle.php?id=<?php echo urlencode($hash); ?>" class="cotizas">
                  <p>Ver producto</p>
                </a>
              </div>
            </div>
        <?php
          }
        } else {
          echo '<p class="no-products">No hay accesorios disponibles</p>';
        }
        ?>
      </section>
    </section>
  </div>


  <div id="loader">
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Función para obtener el hash de la URL o el almacenado
      function getActiveSection() {
        return window.location.hash.slice(1) ||
          localStorage.getItem('activeSection') ||
          'Secciones';
      }

      // Función para mostrar la sección
      function mostrarSeccion(seccionId) {
        // Guardar sección activa
        localStorage.setItem('activeSection', seccionId);

        // Ocultar todas las secciones
        document.querySelectorAll('.product-list').forEach(section => {
          section.style.display = 'none';
        });

        // Mostrar sección activa
        const seccionActiva = document.getElementById(seccionId);
        if (seccionActiva) {
          seccionActiva.style.display = 'grid';

          // Actualizar breadcrumb y título
          const breadcrumb = document.querySelector('#breadcrumb .active');
          const title = document.querySelector('.title-Product');

          if (seccionId === 'Accesorios') {
            breadcrumb.textContent = 'Accesorios';
            title.textContent = 'Accesorios para Torres';
          } else {
            breadcrumb.textContent = 'Secciones';
            title.textContent = 'Torres Arriostradas';
          }
        }
      }

      // Manejar cambios en el hash
      window.addEventListener('hashchange', function() {
        const seccionId = getActiveSection();
        mostrarSeccion(seccionId);
      });

      // Mostrar sección inicial
      mostrarSeccion(getActiveSection());
    });
  </script>
</body>

</html>