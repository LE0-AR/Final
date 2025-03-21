<?php
include '../../../model/autolad/conexcion.php';

// Consulta para Secciones activas
$querySecciones = "SELECT * FROM productos 
                   WHERE sector='Telcos' 
                   AND categoria='GABINETES' 
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
<!-- Copyright 2024  TRANSFORMETAL -->
<!DOCTYPE html>
<html lang="en">

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

</style>

<body>

	<!--Header Inicio-->|
	<header id="header">

		<div class="container-hero ">
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
						<a href="./public/Nosotros/" id="nosotros-link" class="TituloMenu">Nosotros</a>

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
	<script>
		function showSectionFromHash() {
			const hash = window.location.hash.slice(1) || 'Secciones';
			const sections = document.querySelectorAll('.product-list');

			sections.forEach(section => {
				if (section.id === hash) {
					section.style.display = 'grid';
					// Actualizar título según la sección
					document.querySelector('.title-Product').textContent =
						hash === 'Accesorios' ? 'Accesorios para Torres' : 'Torres Arriostradas';
				} else {
					section.style.display = 'none';
				}
			});

			// Actualizar breadcrumb
			const breadcrumb = document.querySelector('#breadcrumb .active');
			if (breadcrumb) {
				breadcrumb.textContent = hash;
			}
		}
	</script>

	<div class="section-main">

		<nav class="breadcrumb" id="breadcrumb">
			<a href="../../telcos/">Telecomunicaciones e IT ></a>
			<a href="../../products/Telcos/">Gabinetes ></a>
			<span class="active">Gabinetes</span>
		</nav>

		<section class="product-header">
			<h1 class="title-Product">GABINETES</h1>
			<p class="description">
				Los gabinetes de Transformetal están diseñados para ofrecer una solución confiable y versátil en una amplia variedad
				de aplicaciones. Con múltiples tamaños disponibles, integran placas traseras universales o específicas que facilitan
				la instalación de equipos tecnológicos como puntos de acceso (AP) Wi-Fi, Wi-Fi 6 y otros dispositivos.

			</p>
		</section>


		<section id="GABINETES" class="product-list">
			<?php
			if (mysqli_num_rows($resultSecciones) > 0) {
				while ($row = mysqli_fetch_assoc($resultSecciones)) {
					$nombre_limpio = str_replace([' ', '.', '/', '\\'], '-', strtolower($row['nombre']));
					$hash = md5($row['id'] . 'transformetal');
					$slug = $nombre_limpio . '-' . $hash;
					$imagen_url = $base_url . 'Control/' . $row['imagen_principal'];
					// Modificar la URL para incluir el ID encriptado
					$producto_url = "detalle.php?id=" . urlencode($hash);
			?>
					<div class="product-card" data-id="<?php echo htmlspecialchars($row['id']); ?>">
						<img src="<?php echo htmlspecialchars($imagen_url); ?>"
							alt="<?php echo htmlspecialchars($row['nombre']); ?>">
						<h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
						<div class="center">
							<a href="<?php echo htmlspecialchars($producto_url); ?>" class="cotizas">
								<p>Ver producto</p>
							</a>
						</div>
					</div>
			<?php
				}
			}
			?>
		</section>


		<section id="Accesorios" class="product-list">
			<?php
			if (mysqli_num_rows($resultAccesorios) > 0) {
				while ($row = mysqli_fetch_assoc($resultAccesorios)) {
					$nombre_limpio = str_replace([' ', '.', '/', '\\'], '-', strtolower($row['nombre']));
					$hash = md5($row['id'] . 'transformetal');
					$slug = $nombre_limpio . '-' . $hash;
					$imagen_url = $base_url . 'Control/' . $row['imagen_principal'];
					$producto_url = "detalle.php?producto=" . urlencode($slug);
			?>
					<div class="product-card">
						<img src="<?php echo htmlspecialchars($imagen_url); ?>"
							alt="<?php echo htmlspecialchars($row['nombre']); ?>">
						<h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
						<div class="center">
							<a href="<?php echo htmlspecialchars($producto_url); ?>" class="cotizas">
								<p>Ver producto</p>
							</a>
						</div>
					</div>
			<?php
				}
			} else {
				echo "<div class='no-products'>No hay accesorios disponibles</div>";
			}
			?>
		</section>
		<div class="espacio"></div>
	</div>

	<script>
		function filterProducts(category, event) {
			// Guardar la categoría seleccionada en localStorage
			localStorage.setItem('currentSection', category);

			// Ocultar todas las secciones
			document.querySelectorAll('.product-list').forEach(section => {
				section.classList.remove('active-section');
			});

			// Mostrar la sección seleccionada con animación
			setTimeout(() => {
				document.getElementById(category).classList.add('active-section');
				updateBreadcrumb(category);
			}, 300);

			// Remover la clase activa de todos los botones y asignarla al seleccionado
			document.querySelectorAll('.btn').forEach(button => {
				button.classList.remove('active');
			});

			if (event) {
				event.target.classList.add('active');
			}
		}

		function loadSection() {
			let savedSection = localStorage.getItem('currentSection');
			let hash = window.location.hash.substring(1);
			let urlParams = new URLSearchParams(window.location.search);
			let view = urlParams.get("view");

			// Priorizar hash y parámetros de URL sobre localStorage
			let sectionToShow = hash || view || savedSection;

			if (sectionToShow) {
				// Si hay una sección guardada, activarla
				document.getElementById(sectionToShow)?.classList.add('active-section');
				document.querySelector(`.btn[data-category="${sectionToShow}"]`)?.classList.add('active');
				updateBreadcrumb(sectionToShow);
			} else {
				// Si no hay una sección guardada, mostrar el historial sin una categoría activa
				updateBreadcrumb('');
			}
		}

		function updateBreadcrumb(category) {
			let breadcrumb = document.getElementById('breadcrumb');
			breadcrumb.innerHTML = `
            <a href="../../Telcos/">Telecomunicaciones e I.T ></a>
            ${category ? `<span class="active">${category.replace('-', ' ')}</span>` : ''}
        `;
		}

		document.addEventListener("DOMContentLoaded", loadSection);
	</script>


</body>

</html>