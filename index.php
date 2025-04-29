<!-- Copyright 2024  TRANSFORMETAL-->
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TRANSFORMETAL</title>
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/chatbot.css">
		<link rel="stylesheet" href="assets/css/footer.css">
		<link rel="stylesheet" href="public/css/categoria.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
		<link rel="icon" type="image/png" href="assets/img/isotipo.png">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-XMR0EQ2J4K"></script>
	</head>
	<style>
/* Slides con fondo por defecto */
	.slide1 { background-image: url('assets/img/banner/banner1.png'); }
	.slide2 { background-image: url('assets/img/banner/banner2.png'); }
	.slide3 { background-image: url('assets/img/banner/banner3.png'); }
	.slide4 { background-image: url('assets/img/banner/banner4.png'); }
	.slide5 { background-image: url('assets/img/banner/banner5.png'); }
	.slide6 { background-image: url('assets/img/banner/banner6.png'); }
	.myslide { background-size: cover; background-position: center; }

	/* Cambia la imagen de fondo en pantallas <= 600px */
	@media (max-width: 992px) {
	.slide1 { background-image: url('2.jpg'); }
	}
	.imgfondo {
		content: url('./assets/img/banner/soldador2.png');
	}

	@media (max-width: 480px) {
		.imgfondo {
			content: url('./assets/img/banner/fondo_responsive.png');
			height: 50%;
			width: 100%;
			object-fit: cover;
			position: absolute;
		}
	}
	</style>
	<body>

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
						<a href="./" class="logo-link">
							<img src="assets/img/logot.png" alt="Transformetal Logo" class="logoTipo">
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
										<li><a href="public/products/Telcos/index.php#gabinetes">Gabinetes</a></li>
										<li><a href="public/products/Telcos/index.php#racks">Racks</a></li>
										<li><a href="public/products/Telcos/index.php#bandejas">Bandejas</a></li>
										<li><a href="public/products/Telcos/index.php#rieles">Riel</a></li>
										<li><a href="public/products/Telcos/index.php#escalerillas">Escalerilla</a></li>
										<li><a href="public/products/Telcos/index.php#planta_externa">Planta Externa</a></li>
										<li><a href="public/products/Telcos/index.php#planta_interna">Planta Interna</a></li>

									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Planta Externa y Electricidad<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu plantaExterna">
										<li><a href="public/products/Electricidad/index.php#gabinetes">Gabinetes</a></li>
										<li><a href="public/products/Electricidad/index.php#cajas">Cajas</a></li>
										<li><a href="public/products/Electricidad/index.php#soportes_herrajes">Soportes y Herrajes</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Exhibición y Almacenes <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu Almacenes">
										<li><a href="public/products/almacenaje/index.php#Gondolas">Góndolas </a></li>
										<li><a href="public/products/almacenaje/index.php#estanterias">Estanterías </a></li>
										<li><a href="public/products/almacenaje/index.php#Rack_Industrial">Racks Industrial</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Mobiliario Urbano <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu paneles">
										<li><a href="public/products/Mobiliario/index.php#Basureros">Basureros </a></li>
										<li><a href="public/products/Mobiliario/index.php#Paneles">Paneles decorativos</a></li>
										<li><a href="public/products/Mobiliario/index.php#Mupis">Mupis </a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Torres <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu Mobiliario">
										<li><a href="public/products/Torre/index.php#Accesorios">Torres Arriostradas </a></li>
										<li><a href="public/products/Torre/index.php#Secciones">Accesorios para torres</a></li>
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
					<form class="search-form" action="./public/busqueda/" method="get">
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

		<!--CArrusel-->
			<section>
				<div class="myslide active slide1" onclick="window.location.href='./public/Nosotros/';"></div>
				<div class="myslide active slide2" onclick="window.location.href='./public/telcos/';"></div>
				<div class="myslide active slide3" onclick="window.location.href='./public/electrico/';"></div>
				<div class="myslide active slide4" onclick="window.location.href='./public/almacenaje/';"></div>
				<div class="myslide active slide5" onclick="window.location.href='./public/mobiliario/';"></div>
				<div class="myslide active slide6" onclick="window.location.href='./public/torre/';"></div>
				<center>
					<div class="dotsbox" id="dotsbox">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
						<span class="dot" onclick="currentSlide(4)"></span>
						<span class="dot" onclick="currentSlide(5)"></span>
						<span class="dot" onclick="currentSlide(6)"></span>
					</div>
				</center>
			</section>

		<!---Productos mas vendido Inicio-->
		<section class="productos-mas-vendidos">
			<div class="Cinta">
				<h2>PRODUCTOS MÁS VENDIDOS</h2>
			</div>
			<div class="productos">
				<div class="producto">
					<img src="./assets/img/Section2Home/1-microdata.png"" alt=" Microdata Center">
					<h3>MICRO DATA CENTER</h3>
					<a href="public/products/Telcos/index.php#gabinetes" class="VerProduct">
						<p>Ver producto</p>
					</a>
				</div>
				<div class="producto">
					<img src="./assets/img/Section2Home/2-bandeja.png" alt="Bandeja Metálica" id="bandej">
					<h3>BANDEJA METÁLICA</h3>
					<a href="public/products/Telcos/index.php#bandejas" class="VerProduct">
						<p>Ver producto</p>
					</a>
				</div>
				<div class="producto">
					<img src="./assets/img/Section2Home/3-rieles.png" alt="Rieles Metálicos">
					<h3>RIELES METÁLICOS</h3>
					<a href="public/products/Telcos/index.php#rieles" class="VerProduct">
						<p>Ver producto</p>
					</a>
				</div>
				<div class="producto">
					<img src="./assets/img/Section2Home/4-escalerilla.png" alt="Rieles Metálicos">
					<h3>ESCALERILLAS</h3>
					<a href="public/products/Telcos/index.php#escalerillas" class="VerProduct">
						<p>Ver producto</p>
					</a>
				</div>
				<div class="producto">
					<img src="./assets/img/Section2Home/5-caja.png" alt="Rieles Metálicos">
					<h3>CAJAS METÁLICAS </h3>
					<a href="public/products/Electricidad/index.php#cajas" class="VerProduct">
						<p>Ver producto</p>
					</a>
				</div>
				<div class="producto">
					<img src="./assets/img/Section2Home/6-torres.png" alt="Rieles Metálicos">
					<h3>TORRE ARRIOSTRADA</h3>
					<a href="public/products/Torre/index.php#Secciones" class="VerProduct">
						<p>Ver producto</p>
					</a>
				</div>
			</div>
		</section>
		<!--Producto mas vendido Fin-->


		<!--Inico de Acerca-->
		<section class="about-section">
			<img class="imgfondo" alt="">
			<div class="content">
				<h1>ACERCA DE NOSOTROS</h1>
				<p>
					Somos una empresa cien por ciento guatemalteca, que fabrica y suministra productos de metalmecánica de alta calidad. Estamos integrados por un gran equipo especializado, que utiliza técnicas basadas en buenas prácticas aplicadas a nivel internacional que permiten precisión, calidad y cumplimiento. Además, contamos con maquinaria a la vanguardia y materia prima de alta calidad que garantiza la satisfacción del cliente.
				</p>
				<br>
				<a href="public/Nosotros/" class="VerProduct">
					<p>Leer más</p>
				</a>
			</div>

		</section>

		<!--acerca-->
		<!--Seccion del videos Inicio-->
		<section class="video-section">
			<div class="ContenVideo">
				<div class="VideoTitulo">
					<h2>Proceso de fabricación</h2>
				</div>
			</div>
			<!-- Video incrustado de YouTube -->
			<div class="video-container">
				<iframe
					src="https://www.youtube.com/embed/Vteh3jiFwAw?si=YbH1wNQnSih9T2GP">
				</iframe>
			</div>
		</section>
		<!--Seccion del videos FIn -->

		<!--Seccion del form Inicio--->
		<section class="contact-container">
			<div class="titulcontacto">
				<h2>Contáctenos Ahora</h2>
			</div>

			<form id="contact-form" class="contact-forms">
				<div class="contact-input-group">
					<label for="nombres">Nombres</label>
					<input type="text" id="nombres" placeholder="Escriba un nombre">

					<label for="apellidos">Apellidos</label>
					<input type="text" id="apellidos" placeholder="Escriba un apellido">
				</div>

				<div class="contact-input-group">
					<label for="correo">Correo</label>
					<input type="email" id="correo" placeholder="Escriba un correo electrónico">

					<label for="telefono">Teléfono</label>
					<input type="number" id="telefono" placeholder="Escriba un teléfono">
				</div>

				<div class="contact-input-group contact-full-width">
					<label for="proyecto">Cuéntenos un poco sobre su proyecto</label>
					<textarea id="proyecto" placeholder="Escriba aquí..."></textarea>
				</div>

				<a class="VerProduct">
					<p>Enviar</p>
				</a>
			</form>
		</section>
		<!--Seccion del form Fin-->



		<!--Chat Incio-->
		<!-- Chat bot UI start -->
		<?php include_once "views/inc/chatbot.php" ?>
		<!-- Chat Bot UI Ends -->
		<!--Chat FIn-->

		<!--Chatbot Fin-->

		<div id="loader">
			<div class="spinner"></div>
		</div>
		<div id="espacio"></div>
		<footer class="footer-container">
			<div class="footer-content">
				<div class="footer-logo">
					<img src="./assets/img/Logo_Azul.png" alt="Transformetal Logo">
				</div>
				<p class="footer-description">
					Transformetal es una empresa líder en metalmecánica, especializada en la transformación y
					fabricación de productos metálicos de alta calidad.
				</p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/people/Transformetal/61556439127740/?locale=es_LA" class="social-icon facebook" style=" background: url('./assets/img/icon/footer/fb.png') no-repeat center/cover;" target="_blank"></a>
					<a href="https://api.whatsapp.com/send/?phone=50237673973&type=phone_number&app_absent=0" class="social-icon whatsapp" style=" background: url('./assets/img/icon/footer/wsp.png') no-repeat center/cover;" target="_blank"></a>
					<a href="https://www.instagram.com/transformetalgt/" class="social-icon instagram" style=" background: url('./assets/img/icon/footer/ig.png') no-repeat center/cover;" target="_blank"></a>
					<a href="https://www.youtube.com/@TransformetalGT" class="social-icon youtube" style=" background: url('./assets/img/icon/footer/yt.png') no-repeat center/cover;" target="_blank"></a>
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
					background-image: url('./assets/img/icon/footer/cel.png');
					background-size: cover;
					margin-right: 5px;
				}

				.contact-icon.email::before {
					content: "";
					display: inline-block;
					width: 40px;
					height: 40px;
					background-image: url('./assets/img/icon/footer/email.png');
					background-size: cover;
					margin-right: 5px;
				}
			</style>
			<div class="footer-bottom">
				<p>©Transformetal 2025. <a href="" class="privacy-link">Todos los derechos reservados</a></p>
				<a href="#" class="privacy-link">Política de privacidad</a>
			</div>
		</footer>


		<script src="assets/js/menu.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/jquery-3.2.1.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script src="assets/js/chat.js"></script>
		<script src="assets/js/video.js"></script>

	</body>

	</html>