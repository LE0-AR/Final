	<!-- Copyright 2024  TRANSFORMETAL-->
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TRANSFORMETAL</title>
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="../assets/css/chatbot.css">
		<link rel="stylesheet" href="../assets/css/footer.css">
		<link rel="stylesheet" href="../public/css/pararrayos.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
		<link rel="icon" type="image/png" href="../assets/img/isotipo.png">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</head>
	<style>

	</style>

	<body>

		<!--Header Inicio-->|
		<header id="header">

			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class=""></i>
						<div class="content-customer-support">
							<span class="text"></span>
							<span class="number"></span>
						</div>
					</div>
					<div class="container-logo">
						<a href="../">
							<i><img src="../assets/img/logot.png" alt="100px" class="logoTipo"></i>

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
									<a href="public/products/Telcos/" class="main-category">Telecomunicaciones e IT<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu ">
										<li><a href="../public/products/Telcos/index.php#gabinetes">Gabinetes</a></li>
										<li><a href="../public/products/Telcos/index.php#racks">Racks</a></li>
										<li><a href="../public/products/Telcos/index.php#bandejas">Bandejas</a></li>
										<li><a href="../public/products/Telcos/index.php#rieles">Riel</a></li>
										<li><a href="../public/products/Telcos/index.php#escalerillas">Escalerilla</a></li>
										<li><a href="../public/products/Telcos/index.php#planta_externa">Planta Externa</a></li>
										<li><a href="../public/products/Telcos/index.php#planta_interna">Planta Interna</a></li>

									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Planta Externa y Electricidad<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu plantaExterna">
										<li><a href="../public/products/Electricidad/index.php#gabinetes">Gabinetes</a></li>
										<li><a href="../public/products/Electricidad/index.php#cajas">Cajas</a></li>
										<li><a href="../public/products/Electricidad/index.php#soportes_herrajes">Soportes y Herrajes</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Exhibición y Almacenes <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu Almacenes">
										<li><a href="../public/products/almacenaje/index.php#Gondolas">Góndolas </a></li>
										<li><a href="../public/products/almacenaje/index.php#estanterias">Estanterías </a></li>
										<li><a href="../public/products/almacenaje/index.php#Rack_Industrial">Racks Industrial</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Mobiliario Urbano <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu paneles">
										<li><a href="../public/products/Mobiliario/index.php#Basureros">Basureros </a></li>
										<li><a href="../public/products/Mobiliario/index.php#Paneles">Paneles decorativos</a></li>
										<li><a href="../public/products/Mobiliario/index.php#Mupis">Mupis </a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Torres <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu Mobiliario">
										<li><a href="../public/products/Torre/index.php#Accesorios">Torres Arriostradas </a></li>
										<li><a href="../public/products/Torre/index.php#Secciones">Accesorios para torres</a></li>
										<li><a href="./">Instalacion de torre arriostrada</a></li>
										<li><a href="./SistemaTierra.php">Sistemas de puesta a tierra</a></li>
										<li><a href="./pararrayos.php">Sistema de pararrayos y baliza </a></li>
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
								<li><a href="../industrias.php#telecom">Telecomunicaciones</a></li>
								<li><a href="../industrias.php#Electrico">Electricidad</a></li>
								<li><a href="../industrias.php#Mobiliario">Mobiliario Urbano</a></li>
								<li><a href="../industrias.php#Exhibicion">Exhibición y Almacenaje </a></li>
							</ul>
						</li>

						<li id="nav2">
							<a href="../maquinaria.php" id="servicios-link" class="TituloMenu">Maquinaria</a>
						</li>

						<li>
							<a href="../public/Nosotros/" id="nosotros-link" class="TituloMenu">Nosotros</a>

						</li>
						<li><a href="../contacto.php" class="TituloMenu">Contacto</a></li>
						<label for="check" class="close-menu"><i class="fas fa-times"></i></label>
					</ul>
					<!-- Barra de búsqueda actualizada -->
					<form class="search-form" action="./public/products/busqueda.php" method="get">
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


		<div id="loader">
			<div class="spinner"></div>
		</div>

		<div class="background-shape"></div>

		<div class="SistemaTierra">
			<div class="content">
				<h1 class="TituloSitema">Pararrayos </h1>
				<p class="paragraph">
					El Pararrayos consiste en un sistema de protección externa contra el rayo, es importante que sea realizada por personal capacitado y bajo los criterios marcados por las normas, debe ser instalada en la parte superior de la torre con su respectivo mástil, cable de bajada acerado, platina de tierras que servirá para el aterrizaje del grounding kit del cable STP, será interconectado al sistema de tierras.
				</p>
				<p class="paragraph">
					La información estadística conocida nos indica que de un modo permanente se forman cerca de 5,000 tormentas alrededor del globo terráqueo, con el consiguiente peligro para bienes y persona. La intensidad media mundial de la descarga de un rayo se estima en 20,000 amperios, pero se llegan a contabilizar rayos de hasta 200,000 amperios.
				</p>
				<div class="center">
					<a href="https://api.whatsapp.com/send/?phone=50237673973&text=Hola%2C%20quiero%20saber%20m%C3%A1s%20informaci%C3%B3n&type=phone_number&app_absent=0" class="cotizas" target="_blank">
						<p>Cotizar</p>
					</a>
				</div>
			</div>
			<div class="images">
				<img src="../assets/img/servicio/pararrayos/parrarallos1.png" alt="Imagen 1">
			</div>
		</div>

		<div class="Tipos">
			<div class="seccion-texto">
				<h1 class="titulo">TIPOS DE PARARRAYOS</h1>
				<div class="contenidoPri">
					<div class="caja">
						<h2 class="subtitulo">TENDIDO</h2>
						<p class="descripcion">
							Protección formada por uno o múltiples conductores aéreos situados sobre la estructura a proteger.
							Los conductores se deberán unir a tierra mediante las bajantes en cada uno de sus extremos.
							El área protegida vendrá dada por el área formada por el conjunto de conductores aéreos.
						</p>
					</div>
					<div class="caja">
						<h2 class="subtitulo">CON DISPOSITIVOS DE CEBADO</h2>
						<p class="descripcion">
							La ventaja es que emiten descargas eléctricas de polaridad inversa al rayo, consiguiendo atraerlo y elevar el punto de impacto
							por encima de la estructura a proteger, por lo que crea mayor radio de cobertura en la base, frente a un pararrayos convencional.
						</p>
					</div>
					<div class="caja">
						<h2 class="subtitulo">punta Franklin</h2>
						<p class="descripcion">
							Su misión es provocar la excitación atmosférica por encima de cualquier otro punto de la estructura a proteger, para aumentar
							la probabilidad de que la descarga incida en su zona de influencia y derivar a tierra
							la corriente del rayo.
						</p>
					</div>
					<div class="caja">
						<h2 class="subtitulo">Jaula de faraday</h2>
						<p class="descripcion">
							El sistema en la recepción del rayo a través de un conjunto de puntas capturadas unidas entre sí por un cable conductor, formando una malla y derivándola a tierra
							mediante una red de bajantes conductores.
						</p>
					</div>
				</div>
			</div>
			<div class="seccion-imagen">
				<img src="../assets/img/servicio/pararrayos/1_pararrayo.png" alt="Pararrayos">
			</div>
		</div>

		<div class="section">
			<div class="conte">
				<h2 class="title">Baliza</h2>
				<p class="text">
					Baliza es un Sistema confiable y eficiente para la señalizacion de obstculos, diseñada para señalizar el
					tráfico aéreo, en entonor tanto industriales como comerciales, ofrece una visibilidad destacada.
				</p>
				<p class="text">
					La baliza o señalizacion noctuna incluye el sumijstro e instalcion de a baliza o foco de obstruccion
					noctuna, con foco y base fotocelda con su respectivo base, flipon en tablero 110 VAC, cable AWG 2x14 YNM para intemperie.
				</p>
				<div class="center">
					<a href="https://api.whatsapp.com/send/?phone=50237673973&text=Hola%2C%20quiero%20saber%20m%C3%A1s%20informaci%C3%B3n&type=phone_number&app_absent=0" class="cotizas" target=’_blank’>
						<p>Cotizar</p>

					</a>
				</div>
			</div>
			<div class="image-contai">
				<img src="../assets/img/servicio/pararrayos/baliza.png" alt="Imagen de torre" class="imageT">
			</div>
		</div>

		<div id="espacio"></div>

		<footer class="footer-container">
			<div class="footer-content">
				<div class="footer-logo">
					<img src="../assets/img/Logo_Azul.png" alt="Transformetal Logo">
				</div>
				<p class="footer-description">
					Transformetal es una empresa líder en metalmecánica, especializada en la transformación y
					fabricación de productos metálicos de alta calidad.
				</p>
				<div class="footer-icons">
					<a href="#" class="social-icon facebook" style=" background: url('../assets/img/icon/footer/fb.png') no-repeat center/cover;"></a>
					<a href="#" class="social-icon whatsapp" style=" background: url('../assets/img/icon/footer/wsp.png') no-repeat center/cover;"></a>
					<a href="#" class="social-icon instagram" style=" background: url('../assets/img/icon/footer/ig.png') no-repeat center/cover;"></a>
					<a href="#" class="social-icon youtube" style=" background: url('../assets/img/icon/footer/yt.png') no-repeat center/cover;"></a>
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
					background-image: url('../assets/img/icon/footer/cel.png');
					background-size: cover;
					margin-right: 5px;
				}

				.contact-icon.email::before {
					content: "";
					display: inline-block;
					width: 40px;
					height: 40px;
					background-image: url('../assets/img/icon/footer/email.png');
					background-size: cover;
					margin-right: 5px;
				}
			</style>
			<div class="footer-bottom">
				<p>©Transformetal 2025. <a href="" class="privacy-link">Todos los derechos reservados</a></p>
				<a href="#" class="privacy-link">Política de privacidad</a>
			</div>
		</footer>


		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
		<script src="../assets/js/menu.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script src="../assets/js/popper.min.js"></script>
		<script src="../assets/js/jquery-3.2.1.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script src="../assets/js/chat.js"></script>


	</body>

	</html>
