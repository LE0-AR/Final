<?php
if (isset($_GET['query'])) {
	$query = strtolower($_GET['query']);
} else {
	echo "Por favor ingresa un término de búsqueda.";
	exit;
}

// Función para buscar productos en un archivo PHP (que contiene HTML)
function buscarProductos($archivo, $query)
{
	// Obtener el contenido del archivo
	$contenido = file_get_contents($archivo);

	// Buscar productos que tengan la clase 'product-item' y que coincidan con el término de búsqueda
	// Incluimos el enlace 'Mostrar Detalles' dentro de la búsqueda para cada producto
	preg_match_all('/<div class="product-item">(.*?)<a href="([^"]+)" class="btnInfo">Mostrar Detalles<\/a>(.*?)<\/div>/s', $contenido, $productos);

	// Filtrar productos que contienen el término de búsqueda
	$productosCoincidentes = [];
	foreach ($productos[0] as $producto) {
		// Convertir a minúsculas y verificar si la palabra de búsqueda está contenida en el producto
		if (stripos(strip_tags($producto), $query) !== false) {
			// Añadir el botón de "Mostrar Detalles" con su enlace
			$productosCoincidentes[] = $producto;
		}
	}

	return $productosCoincidentes;
}

// Llamar a la función para buscar en un archivo específico (por ejemplo, productos.php)
$productosEncontrados = buscarProductos('productos.php', $query);
?>

<!DOCTYPE html>
<html lang="es">
<<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>TRANSFORMETAL</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="assets/css/styleProducts.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- Icono  data-barba="container" data-barba-namespace="home"-->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="icon" type="image/png" href="assets/img/logo.png" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet" />
	</head>
	<style>
		#section9 {
			margin-top: 200px;
		}

		.rs {
			margin-top: 20px;
			font-size: 20px;
		}
	</style>

	<body class="scroll-ini">

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
						<a href="./">
							<i><img src="assets/img/logotipo.png" alt="100px" style="width: 500px; height: 100px; "></i>

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
										<li><a href="productos.php#section25">Torres Arriostradas y Accesorios</a></li>
										<li><a href="productos.php#section14">Sistemas de puestas a tierra</a></li>
										<li><a href="#">Balizas</a></li>
										<li><a href="#">Interconexión a tierra </a></li>
										<li><a href="#">Soportes y Herrajes</a></li>
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
								<li><a href="nosotros.php">Nosotros</a></li>
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


		<!--Header FIN-->
		<section id="section9" class="section">
			<section id="gabinete">
				<div class="area">
					<div class="profile">
						<div class="profile-info">
							<h2>Productos en Transformetal</h2>
							<p>En Transformetal, ofrecemos productos de metal de alta calidad, fabricados con materias primas seleccionadas
								cuidadosamente y diseñados para cumplir con los más altos estándares de durabilidad y eficiencia. Nuestra prioridad
								es brindar soluciones que se adapten a sus necesidades con excelencia y confianza.</p>

						</div>
					</div>
				</div>

				<!-- Contenedor principal -->
				<div class="main-container">
					<!-- Puedes agregar enlaces de categorías aquí si es necesario 
                <div class="categories">
                    <h2>Categorías</h2>
                    <div class="category-list">
                        <ul>
                            <li></li> 
                        </ul>
                    </div>
                </div>
				<!-- Puedes agregar enlaces de categorías aquí si es necesario -->
					<!-- Resultados de la búsqueda -->
					<div class="contenido">
						<section class="product-results">
							<?php if (count($productosEncontrados) > 0) : ?>
								<h2 style="padding: 5px; margin: auto" class="rs">Resultados de búsqueda para: '<?php echo htmlspecialchars($query); ?>'</h2>
								<div class='product-list'>
									<?php
									foreach ($productosEncontrados as $producto) {
										// Mostrar el producto encontrado sin añadir un contenedor adicional
										echo $producto;
									}
									?>
								</div>
							<?php else : ?>
								<h2 style="padding: 5px; margin: auto" class="rs">No se encontraron productos para '<?php echo htmlspecialchars($query); ?>'.</h2>
							<?php endif; ?>
						</section>
					</div>
				</div>
			</section>
		</section>

		<div id="loader">
		</div>

		<script src="assets/js/menu.js"></script>

		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</body>

</html>