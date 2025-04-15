<?php
include '../../views/inc/conection.php';




$base_url = "http://localhost/transformetal/app/app/";
?>
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
<style>
  .category-nav {
    display: none;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    padding: 20px;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .category-link {
    padding: 10px 20px;
    color: var(--ColorNegro);
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
  }

  .category-link:hover,
  .category-link.active {
    background: var(--Titulo);
    color: white;
  }

  .product-section {
    opacity: 0;
    transition: opacity 0.3s ease;
    width: 100%;
  }

  .product-section[style*="display: block"] {
    opacity: 1;
  }

  .product-list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
  }
</style>

<body>  
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
          <a href="../../">
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
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Arquitectónicos y Panales Decorativos <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu paneles">
                  <li><a href="productos.php#Arquitectonicos">Paneles decorativos</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Mobiliario Urbano <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu Mobiliario">
                  <li><a href="productos.php#Mobiliario">Basureros</a></li>
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

  <div class="section-main">
    <?php
    if (isset($_GET['query']) && !empty($_GET['query'])) {
      $busqueda = mysqli_real_escape_string($connect, $_GET['query']);
      
      $query = "SELECT * FROM productos 
                WHERE estado = 'Activo' 
                AND (nombre LIKE ? 
                OR descripcion LIKE ? 
                OR categoria LIKE ? 
                OR sector LIKE ?)";
      
      $stmt = mysqli_prepare($connect, $query);
      
      if ($stmt) {
        $termino = "%{$busqueda}%";
        mysqli_stmt_bind_param($stmt, "ssss", $termino, $termino, $termino, $termino);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($resultado) > 0) {
          echo "<h2>Resultados de búsqueda para: " . htmlspecialchars($busqueda) . "</h2>";
          echo "<div class='product-list'>";
          
          while ($row = mysqli_fetch_assoc($resultado)) {
            $hash = md5($row['id'] . 'transformetal');
            ?>
            <div class="product-card">
              <img src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($row['imagen_principal']); ?>"
                   alt="<?php echo htmlspecialchars($row['nombre']); ?>">
              <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
              <p class="category"><?php echo htmlspecialchars($row['categoria']); ?></p>
              <div class="center">
                <a href="../products/detalle.php?id=<?php echo urlencode($hash); ?>" 0
                   class="cotizas">Ver producto</a>
              </div>
            </div>
            <?php
          }
          echo "</div>";
        } else {
          echo "<div class='no-results'>
                  <h2>No se encontraron resultados para: " . htmlspecialchars($busqueda) . "</h2>
                  <p>Intente con otros términos de búsqueda</p>
                </div>";
        }
        
        mysqli_stmt_close($stmt);
      }
    } else {
      echo "<div class='no-query'>
              <h2>Realice una búsqueda</h2>
              <p>Ingrese un término en el buscador</p>
            </div>";
    }
    ?>
  </div>

  
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      function mostrarCategoria(categoriaId) {
        // Ocultar todas las secciones
        document.querySelectorAll('.product-section').forEach(section => {
          section.style.display = 'none';
        });

        document.querySelectorAll('.category-link').forEach(link => {
          link.classList.remove('active');
        });

        // Encontrar la categoría por ID
        let categoriaEncontrada = null;
        Object.entries(<?php echo json_encode($categorias); ?>).forEach(([key, value]) => {
          if (value.id === categoriaId) {
            categoriaEncontrada = value;
          }
        });

        // Mostrar sección seleccionada
        const seccionActiva = document.getElementById(categoriaId);
        const linkActivo = document.querySelector(`[data-category="${categoriaId}"]`);

        if (seccionActiva && linkActivo && categoriaEncontrada) {
          seccionActiva.style.display = 'block';
          linkActivo.classList.add('active');

          // Actualizar breadcrumb y título
          const breadcrumb = document.querySelector('#breadcrumb-text');
          breadcrumb.textContent = categoriaEncontrada.titulo;
          document.title = `${categoriaEncontrada.titulo} - TRANSFORMETAL`;

          localStorage.setItem('activeSection', categoriaId);
        }
      }

      // Manejar hash inicial
      const hash = window.location.hash.slice(1);
      const initialCategory = hash || localStorage.getItem('activeSection') || 'gabinetes';
      mostrarCategoria(initialCategory);

      // Manejar clics en enlaces
      document.querySelectorAll('.category-link').forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const categoria = this.dataset.category;
          history.pushState(null, '', `#${categoria}`);
          mostrarCategoria(categoria);
        });
      });

      // Manejar cambios en el hash
      window.addEventListener('hashchange', () => {
        const categoria = window.location.hash.slice(1) || 'gabinetes';
        mostrarCategoria(categoria);
      });
    });
  </script>

  <footer class="footer-container">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="../../../assets/img/Logo_Azul.png" alt="Transformetal Logo">
      </div>
      <p class="footer-description">
        Transformetal es una empresa líder en metalmecánica, especializada en la transformación y
        fabricación de productos metálicos de alta calidad.
      </p>
      <div class="footer-icons">
        <a href="https://www.facebook.com/people/Transformetal/61556439127740/?locale=es_LA" class="social-icon facebook" style=" background: url('../../.../../../assets/img/icon/footer/fb.png') no-repeat center/cover;" target="_blank"></a>
        <a href="https://api.whatsapp.com/send/?phone=50237673973&type=phone_number&app_absent=0" class="social-icon whatsapp" style=" background: url('../../../assets/img/icon/footer/wsp.png') no-repeat center/cover;" target="_blank"></a>
        <a href="https://www.instagram.com/transformetalgt/" class="social-icon instagram" style=" background: url('../../../assets/img/icon/footer/ig.png') no-repeat center/cover;" target="_blank"></a>
        <a href="https://www.youtube.com/@TransformetalGT" class="social-icon youtube" style=" background: url('../../../assets/img/icon/footer/yt.png') no-repeat center/cover;" target="_blank"></a>
        <a href="tel:37673973" class="contact-icon phone">3767-3973 / 5695-2444</a>
        <a href="mailto:contacto@transformetalgt.com" class="contact-icon email">contacto@transformetalgt.com</a>
      </div>
    </div>
    <style>
      .contact-icon.phone::before {
        content: "";
        display: inline-block;
        width: 40px;
        height: 40px;
        background-image: url('../../../assets/img/icon/footer/cel.png');
        background-size: cover;
        margin-right: 5px;
      }

      .contact-icon.email::before {
        content: "";
        display: inline-block;
        width: 40px;
        height: 40px;
        background-image: url('../../../assets/img/icon/footer/email.png');
        background-size: cover;
        margin-right: 5px;
      }
    </style>
    <div class="footer-bottom">
      <p>©Transformetal 2025. <a href="" class="privacy-link">Todos los derechos reservados</a></p>
      <a href="#" class="privacy-link">Política de privacidad</a>
    </div>
  </footer>
  <script src="../../../assets/js/menu.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>