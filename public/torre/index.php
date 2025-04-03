	<!-- Copyright 2024  TRANSFORMETAL-->
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TRANSFORMETAL</title>
		<link rel="stylesheet" href="../../assets/css/style.css">
		<link rel="stylesheet" href="../../assets/css/chatbot.css">
		<link rel="stylesheet" href="../../assets/css/footer.css">
		<link rel="stylesheet" href="../css/sectores.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
		<link rel="icon" type="image/png" href="../../assets/img/isotipo.png">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	</head>

	<body>

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
						<a href="../../">
							<i><img src="../../assets/img/logot.png" alt="100px"></i>

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
										<li><a href="../../public/products/Telcos/index.php#gabinetes">Gabinetes</a></li>
										<li><a href="../../public/products/Telcos/index.php#racks">Racks</a></li>
										<li><a href="../../public/products/Telcos/index.php#bandejas">Bandejas</a></li>
										<li><a href="../../public/products/Telcos/index.php#rieles">Riel</a></li>
										<li><a href="../../public/products/Telcos/index.php#escalerillas">Escalerilla</a></li>
										<li><a href="../../public/products/Telcos/index.php#planta_externa">Planta Externa</a></li>
										<li><a href="../../public/products/Telcos/index.php#planta_interna">Planta Interna</a></li>

									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Planta Externa y Electricidad<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu plantaExterna">
										<li><a href="../../public/products/Electricidad/index.php#gabinetes">Gabinetes</a></li>
										<li><a href="../../public/products/Electricidad/index.php#cajas">Cajas</a></li>
										<li><a href="../../public/products/Electricidad/index.php#soportes_herrajes">Soportes y Herrajes</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Exhibición y Almacenes <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu Almacenes">
										<li><a href="../../public/products/almacenaje/index.php#Gondolas">Góndolas </a></li>
										<li><a href="../../public/products/almacenaje/index.php#estanterias">Estanterías </a></li>
										<li><a href="../../public/products/almacenaje/index.php#Rack_Industrial">Racks Industrial</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Mobiliario Urbano <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu paneles">
										<li><a href="../../public/products/Mobiliario/index.php#Basureros">Basureros </a></li>
										<li><a href="../../public/products/Mobiliario/index.php#Paneles">Paneles decorativos</a></li>
										<li><a href="../../public/products/Mobiliario/index.php#Mupis">Mupis </a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="main-category">Torres <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
									<ul class="nav-submenu Mobiliario">
										<li><a href="../../public/products/Torre/index.php#Secciones">Torres Arriostradas</a></li>
										<li><a href="../../public/products/Torre/index.php#Accesorios">Accesorios para torres</a></li>
										<li><a href="../../control/">Instalacion de torre arriostrada</a></li>
										<li><a href="../../control/SistemaTierra.php">Sistemas de puesta a tierra</a></li>
										<li><a href="../../control/pararrayos.php">Sistema de pararrayos y baliza </a></li>
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
								<li><a href="../../industrias.php#telecom">Telecomunicaciones</a></li>
								<li><a href="../../industrias.php#Electrico">Electricidad</a></li>
								<li><a href="../../industrias.php#Mobiliario">Mobiliario Urbano</a></li>
								<li><a href="../../industrias.php#Exhibicion">Exhibición y Almacenaje </a></li>
							</ul>
						</li>

						<li id="nav2">
							<a href="../../maquinaria.php" id="servicios-link" class="TituloMenu">Maquinaria</a>
						</li>

						<li>
							<a href="../../public/Nosotros/" id="nosotros-link" class="TituloMenu">Nosotros</a>

						</li>
						<li><a href="../../contacto.php" class="TituloMenu">Contacto</a></li>
						<label for="check" class="close-menu"><i class="fas fa-times"></i></label>
					</ul>
					<!-- Barra de búsqueda actualizada -->
					<form class="search-form" action="" method="get">
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
		<?php
		include "../../views/inc/chatbot.php";
		?>

		<div id="loader">
			<div class="spinner"></div>
		</div>
		<div class="background-shape"><img src="../../assets/img/banner/chispa_fondo.png" alt="Pararrayos" class="imagen"></div>

		<div class="SistemaTierra" style="top: -75%;">
			<div class="content">
				<h1 class="TituloSitema">Torres</h1>
				<p class="paragraph">
					En Transformetal, fabricamos soluciones metalmecánicas especializadas para la industria de torres de comunicación
					e infraestructura vertical. Nuestros productos, diseñados con materiales de alta resistencia y procesos avanzados,
					garantizan durabilidad y estabilidad incluso en las condiciones más desafiantes.
				</p>
			</div>
		</div>


		<section class="productos">
			<h2 class="titulo">NUESTROS PRODUCTOS y servicios</h2>
			<div class="grid">
				<a href="../../public/products/Torre/index.php#Secciones">
					<div class="producto">
						<img src="../../assets/img/iconosProductos/torres/iconTorre/accesorios.png" alt="Secciones para torre">
						<p>Secciones para torre</p>
					</div>
				</a>
				<a href="../../public/products/Torre/index.php#Accesorios">
					<div class="producto">
						<img src="../../assets/img/iconosProductos/torres/iconTorre/accesorios-13.png" alt="Accesorios">
						<p>Accesorios para torre</p>
					</div>
				</a>
				<a href="../../control/index.php">
					<div class="producto">
						<img src="../../assets/img/iconosProductos/Telcos/planta externa.png" alt="Escalerillas">
						<p>InstalaciÓn de torres</p>
					</div>
				</a>
				<a href="../../control/SistemaTierra.php">
					<div class="producto">
						<img src="../../assets/img/iconosProductos/torres/iconTorre/SistemaTierra.png" alt="Rieles">
						<p>Sistema de tierras</p>
					</div>
				</a>
				<a href="../../control/pararrayos.php">
					<div class="producto">
						<img src="../../assets/img/iconosProductos/torres/iconTorre/baliza.png" alt="Escalerillas">
						<p>Baliza y pararrayos</p>
					</div>
				</a>
			</div>
		</section>

		<div id="espacio"></div>

		<footer class="footer-container">
			<div class="footer-content">
				<div class="footer-logo">
					<img src="../../assets/img/Logo_Azul.png" alt="Transformetal Logo">
				</div>
				<p class="footer-description">
					Transformetal es una empresa líder en metalmecánica, especializada en la transformación y
					fabricación de productos metálicos de alta calidad.
				</p>
				<div class="footer-icons">
					<a href="#" class="social-icon facebook" style=" background: url('../../assets/img/icon/footer/fb.png') no-repeat center/cover;"></a>
					<a href="#" class="social-icon whatsapp" style=" background: url('../../assets/img/icon/footer/wsp.png') no-repeat center/cover;"></a>
					<a href="#" class="social-icon instagram" style=" background: url('../../assets/img/icon/footer/ig.png') no-repeat center/cover;"></a>
					<a href="#" class="social-icon youtube" style=" background: url('../../assets/img/icon/footer/yt.png') no-repeat center/cover;"></a>
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
					background-image: url('../../assets/img/icon/footer/cel.png');
					background-size: cover;
					margin-right: 5px;
				}

				.contact-icon.email::before {
					content: "";
					display: inline-block;
					width: 40px;
					height: 40px;
					background-image: url('../../assets/img/icon/footer/email.png');
					background-size: cover;
					margin-right: 5px;
				}
			</style>
			<div class="footer-bottom">
				<p>©Transformetal 2025. <a href="" class="privacy-link">Todos los derechos reservados</a></p>
				<a href="#" class="privacy-link">Política de privacidad</a>
			</div>
		</footer>

		<script src="https://kit.fontawesome.com/9f5db648e8.js" crossorigin="anonymous"></script>
		<script src="../../assets/js/menu.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="../../assets/js/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script src="../../assets/js/chat.js"></script>


		</script>
	</body>

	</html>