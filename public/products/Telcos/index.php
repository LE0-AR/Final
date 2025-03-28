<?php
include '../../../model/autolad/conexcion.php';

// Definir categorías y sus propiedades
$categorias = [
  'GABINETES' => [
    'id' => 'gabinetes',
    'titulo' => 'Gabinetes',
    'descripcion' => 'Los gabinetes de Transformetal están diseñados para ofrecer una solución confiable y versátil en una amplia variedad de aplicaciones. Con múltiples tamaños disponibles, integran placas traseras universales o específicas que facilitan la instalación de equipos tecnológicos.',
    'icono' => '../../assets/img/iconosProductos/Telcos/gabinetes.png'
  ],
  'RACKS' => [
    'id' => 'racks',
    'titulo' => 'Racks',
    'descripcion' => 'Diseñados para ofrecer una solución robusta y eficiente en la gestión de equipos, nuestros racks son ideales para alojar servidores, equipos de telecomunicaciones y otros dispositivos electrónicos. Fabricados con materiales de alta calidad, garantizan seguridad, fácil acceso y una organización optimizada, permitiendo una instalación ordenada y un mantenimiento sencillo. Transformetal, la opción confiable para mantener tus equipos organizados y operativos.',
    'icono' => '../../assets/img/iconosProductos/Telcos/racks.png'
  ],
  'RIELES' => [
    'id' => 'rieles',
    'titulo' => 'Rieles',
    'descripcion' => ' Los rieles de Transformetal están diseñados para proporcionar una solución robusta y
                  flexible en la instalación de equipos y componentes. Fabricados con materiales de alta
                  calidad, nuestros rieles aseguran una instalación segura y eficiente, permitiendo un
                  fácil montaje y ajuste de sus sistemas. Disponibles en diversas configuraciones y tamaños,
                  son ideales para adaptarse a sus necesidades específicas, garantizando estabilidad y
                  soporte duradero para sus proyectos de infraestructura.',
    'icono' => '../../assets/img/iconosProductos/Telcos/rieles.png'
  ],
  'ESCALERILLAS' => [
    'id' => 'escalerillas',
    'titulo' => 'Escalerillas',
    'descripcion' => 'Las escalerillas de Transformetal están diseñadas para ofrecer un acceso seguro y
                  cómodo a equipos y sistemas en instalaciones industriales y de telecomunicaciones.
                  Fabricadas con materiales resistentes, garantizan una gran durabilidad y estabilidad.
                  Su diseño modular permite adaptarse a diferentes configuraciones y necesidades, facilitando
                  el montaje y mantenimiento de su infraestructura. Con las escalerillas de Transformetal,
                  asegurará un acceso fácil y seguro, optimizando la eficiencia operativa de sus proyectos.',
    'icono' => '../../assets/img/iconosProductos/Telcos/escalerillas.png'
  ],
  'BANDEJAS' => [
    'id' => 'bandejas',
    'titulo' => 'Bandejas',
    'descripcion' => 'Las bandejas de Transformetal están diseñadas para ofrecer una solución
                  eficiente en la organización y soporte de equipos electrónicos y componentes.
                  Fabricadas con materiales de alta calidad, brindan una gran capacidad de carga,
                  optimizando el espacio y facilitando el acceso a los dispositivos. Además,
                  los diseños pueden personalizarse según las necesidades específicas de cada
                  cliente, garantizando la máxima protección y eficiencia en sus instalaciones.
                  Ideales para mantener los equipos organizados y permitir un mantenimiento sencillo.',
    'icono' => '../../assets/img/iconosProductos/Telcos/bandejas.png'
  ],
 'PLANTA EXTERNA' =>  [
        'id' => 'planta_externa', // Corregido el ID
        'titulo' => 'Planta Externa', // Corregido el título
        'descripcion' => 'Las soluciones de metalmecánica de Transformetal están diseñadas para ofrecer una 
                        infraestructura robusta y eficiente, ideal para la planta interna. Fabricados con materiales 
                        de alta calidad, sus productos incluyen estructuras de soporte, gabinetes, cajas de protección 
                        y herrajes, garantizando durabilidad, seguridad y facilidad de mantenimiento. Además, ofrecen 
                        opciones personalizadas que se adaptan a las necesidades específicas de cada proyecto, optimizando 
                        el espacio y asegurando la protección de los equipos.',
        'icono' => '../../assets/img/iconosProductos/Telcos/planta-externa.png'
    ],
    'PLANTA INTERNA' => [
        'id' => 'planta_interna',
        'titulo' => 'Planta Interna',
        'descripcion' => 'Transformetal ofrece soluciones de metalmecánica diseñadas para satisfacer las necesidades 
        específicas de su industria. Con una amplia gama de productos personalizados, que incluyen estructuras robustas, 
        equipos especializados y componentes de alta precisión, sus soluciones optimizan el flujo de trabajo y reducen 
        tiempos de producción. Además, garantizan la protección de los trabajadores y equipos, cumpliendo con las estrictas 
        normas de seguridad industrial. Transformetal se especializa en el diseño y fabricación a medida, utilizando 
        materiales de calidad y una ingeniería especializada.',
        'icono' => '../../assets/img/iconosProductos/Telcos/planta-interna.png'
    ]
];

// Consultas por categoría
$resultados = [];
foreach ($categorias as $categoria => $info) {
  $query = "SELECT * FROM productos 
              WHERE sector = 'Telcos' 
              AND categoria = ? 
              AND estado = 'Activo'";

  $stmt = mysqli_prepare($connect, $query);
  if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $categoria);
    mysqli_stmt_execute($stmt);
    $resultados[$info['id']] = mysqli_stmt_get_result($stmt);
  }
}

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


    <!-- Navegación de categorías -->
    <div class="category-nav">
      <?php foreach ($categorias as $categoria => $info): ?>
        <a href="#<?php echo $info['id']; ?>"
          class="category-link"
          data-category="<?php echo $info['id']; ?>">
          <?php echo $info['titulo']; ?>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Secciones de productos -->
    <nav class="breadcrumb">
      <a href="../../telcos/">Telecomunicaciones e IT ></a>
      <span class="active" id="breadcrumb-text"></span>
    </nav>
    <?php foreach ($categorias as $categoria => $info): ?>
      <section id="<?php echo $info['id']; ?>"
        class="product-section"
        style="display: none;">

        <div class="product-header">
          <h1 class="title-Product"><?php echo $info['titulo']; ?></h1>
          <p class="description"><?php echo $info['descripcion']; ?></p>
        </div>

        <div class="product-list">
          <?php
          if ($resultados[$info['id']] && mysqli_num_rows($resultados[$info['id']]) > 0):
            while ($row = mysqli_fetch_assoc($resultados[$info['id']])):
              $hash = md5($row['id'] . 'transformetal');
          ?>
              <div class="product-card">
                <img src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($row['imagen_principal']); ?>"
                  alt="<?php echo htmlspecialchars($row['nombre']); ?>">
                <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
                <div class="center">
                  <a href="detalle.php?id=<?php echo urlencode($hash); ?>"
                    class="cotizas">Ver producto</a>
                </div>
              </div>
            <?php
            endwhile;
          else:
            ?>
            <p class="no-products">No hay productos disponibles</p>
          <?php endif; ?>
        </div>
      </section>
    <?php endforeach; ?>
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