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
		<link rel="stylesheet" href="../assets/css/sistemaTierra.css">
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
						<a href="../">
							<i><img src="../assets/img/logot.png" alt="100px" style="width: 500px; height: 100px; "></i>

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
										<li><a href="../productos.php#section25">Torres Arriostradas y Accesorios</a></li>
										<li><a href="../control/SistemaTierra.php">Sistemas de puestas a tierra</a></li>
										<li><a href="../control/torre.php">Instalacion de torre arriostrada</a></li>
										<li><a href="#">Pararrayos </a></li>
										
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


		<!--chatbot Inicio-->
		<!--chatbot de whatsapp-->
		<div class="message-wrapper">
			<div class="message-toggle">
				<a href="https://api.whatsapp.com/send/?phone=50237673973&type=phone_number&app_absent=0" target="_blank">
					<i class="fa-brands fa-whatsapp"></i>
				</a>

			</div>
		</div>
		<!--whatsapp Fin-->

		<!--Chat Incio-->
		<!-- Chat bot UI start -->
		<div class="chat-screen">
			<div class="chat-header">
				<div class="chat-header-title">Asistente Transformetal</div>
			</div>
			<!-- Prueba de chatbot pedido de datos inicio -->
			<form id="chat-form" method="POST">
				<div class="chat-mail">
					<div class="row">
						<div class="chat-description">
							<p style="font-size: 14px; top:-50px;">
								Bienvenido/a. Estamos aquí para atenderle de la mejor manera posible.
								Por favor, proporcione la siguiente información para comenzar.
							</p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input
									style="width: 280px;  height:30px;"
									required
									type="text"
									class="form-control input-nombre"
									placeholder="Ingrese su nombre..."
									name="nombre" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input
									style="width: 280px;  height:30px;"
									required
									type="email"
									class="form-control input-email"
									placeholder="Ingrese su correo electronico..."
									name="email" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input
									style="width: 280px;  height:30px;"
									required
									type="number"
									class="form-control input-telefono"
									placeholder="Ingrese su numero telefonico..."
									name="telefono" />
							</div>
						</div>
						<div class="col-md-12 btn">
							<center>
								<button
									type="submit"
									class="btn btn-primary btn-form">
									Iniciar
								</button>
							</center>
						</div>
					</div>


				</div>

				<!-- Este es el nuevo div que se activará con un botón -->
				<div id="activate-chat-body" class="chat-body hide" style="display: none;">
					<!-- Aquí irán los mensajes del chat -->
				</div>
				<div class="chat-input hide" style="display: none;">
					<input
						type="text"
						placeholder="Escriba su mensaje..."
						id="user-input"
						name="user-input" />
					<div class="input-action-icon">
						<a id="send-message">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								width="24"
								height="24"
								viewBox="0 0 24 24"
								fill="none"
								stroke="currentColor"
								stroke-width="2"
								stroke-linecap="round"
								stroke-linejoin="round"
								class="feather feather-send"
								id="enviar">
								<line x1="22" y1="2" x2="11" y2="13"></line>
								<polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
							</svg>
						</a>
					</div>

				</div>
			</form>
		</div>
		<div class="chat-bot-icon">
			<svg
				xmlns="http://www.w3.org/2000/svg"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				stroke-linecap="round"
				stroke-linejoin="round"
				class="feather feather-message-square animate">
				<path
					d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
			</svg>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				stroke-linecap="round"
				stroke-linejoin="round"
				class="feather feather-x">
				<line x1="18" y1="6" x2="6" y2="18"></line>
				<line x1="6" y1="6" x2="18" y2="18"></line>
			</svg>
		</div>
		<!-- Chat Bot UI Ends -->
		<!--Chat FIn-->

		<!--Chatbot Fin-->

		<div id="loader">
			<div class="spinner"></div>
		</div>

		<div class="background-shape"></div>

		<div class="SistemaTierra">
			<div class="content">
				<h1 class="TituloSitema">SISTEMA DE TIERRAS </h1>
				<p class="paragraph">
					La protección de un sistema de tierras debe fundamentarse en una correcta puesta a tierra, la cual cumple con la función de establecer conexiones equipotenciales y garantizar que, en un evento de falla a tierra, toda la corriente de corto circuito retorne a la fuente de una manera controlada, que la unión eléctrica con la tierra de una parte de un circuito eléctrico o de un Pararrayos se efectúa mediante el sistema de tierras.
				</p>
				<p class="paragraph">
					El Sistema de Tierras debe enfocarse en la protección de las personas y los equipos, las descargas no se pueden controlar, pero el riesgo de su impacto puede minimizarse de manera que la instalación eléctrica sea segura.
				</p>
				<p class="paragraph">
					Está formada por un conjunto de electrodos u otros elementos enterrados, que tienen como misión forzar la derivación al terreno de las intensidades de cualquier naturaleza que se puedan originar en nuestra instalación, ya se trate de corrientes de defecto a frecuencia industrial (50Hz) o de descargas atmosféricas.
				</p>
			</div>
			<div class="images">
				<img src="../assets/img/SistemaTierra/img1.png" alt="Imagen 1">
				<img src="../assets/img/SistemaTierra/img2.png" alt="Imagen 2">
			</div>
		</div>

		<div class="section">

			<div class="Torre">
				<h2 class="title">ESTRUCTURAS INNOVADORAS</h2>
				<p class="text">
					Existen varios métodos para la construcción de sistemas de tierras, siendo el más utilizado el de conexión con varilla de cobre a tierra. Comúnmente se instalará enterrándola de manera vertical y profunda en el suelo.
				</p>
				<p class="text">
					La conexión con varilla de cobre, constituye el método o técnica más utilizado de puesta a tierra debido a su fácil instalación. Su introducción en el terreno es por hincado.
				</p>
				<p class="text">
					Estará formada por tres varillas de cobre de 5/8” x 2.4 m de largo, enterradas verticalmente, formando un triángulo equilátero. Estas se unirán mediante cable desnudo o cinta de cobre enterrados en una zanja de 60 a 80 cm. de profundidad y se conectarán a la red de tierras mediante puente de comprobación, dentro de una caja de registro, obteniendo la mayor reducción de la resistencia eléctrica.
				</p>
				<p class="text">
					La instalación con varillas de cobre es preferida para redes eléctricas sin espacios grandes disponibles, la corriente eléctrica seguirá el camino de menor resistencia para desviar la corriente de defecto lejos de un circuito, el sistema está diseñado para reducir la resistencia de tierra, idealmente a 5 o menos ohm.
				</p>
				<div class="center">
					<a href="https://api.whatsapp.com/send/?phone=50237673973&text=Hola%2C%20quiero%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20torres&type=phone_number&app_absent=0" class="cotizas" target=’_blank’>
						<p>Cotizar</p>

					</a>
				</div>

			</div>
			<div class="image-container">
				<img src="../assets/img/SistemaTierra/img4.png" alt="Imagen de torre" class="image">
			</div>

		</div>
		<div class="Cinta">
			<h2>Materiales que utilizamos para la instalación</h2>
		</div>
		<div class="grid">
			<div class="item">
				<img src="../assets/img/SistemaTierra/1_varillas.png" alt="Tensor">
				<p class="description">Varillas de cobre de 5/8 2.4" de largo</p>
			</div>
			<div class="item">
				<img src="../assets/img/SistemaTierra/2_cable_c.png" alt="Grillete">
				<p class="description">Cable de cobre de 1/0”</p>
			</div>
			<div class="item">
				<img src="../assets/img/SistemaTierra/3_soldaduras.png" alt="Preformado">
				<p class="description">soldaduras de cadweld exotérmicas</p>
			</div>
			<div class="item">
				<img src="../assets/img/SistemaTierra/4_platina.png" alt="Cable Acerado">
				<p class="description">Platina</p>
			</div>
			<div class="item">
				<img src="../assets/img/SistemaTierra/5_caja.png" alt="Tornillo">
				<p class="description">Caja de registro</p>
			</div>
			<div class="item">
				<img src="../assets/img/SistemaTierra/6_cinta.png" alt="Guardacabos">
				<p class="description">Cinta Bandit</p>
			</div>

		</div>
		<div class="section">
			<div class="conte">
				<h2 class="title">Interconexión a tierra</h2>
				<p class="text">
					La interconexión del sistema de tierras consiste en la unificación de tierras físicas delta de torre
					arriostrada a oficinas del cliente, interconectando por medio de un conductor de cobre AWG y aplicación de bentonita.
				</p>
				<p class="text">
					Se considera una distancia máxima de 15 metros entre la Delta y las oficinas. Para la unificación de tierras físicas
					en necesario contar con: varillas de tierras, cable AWG 2/0, soldaduras exotérmicas, varillas de tierras de 5/8” x 8’, bentonita.
				</p>
				<div class="center">
					<a href="https://api.whatsapp.com/send/?phone=50237673973&text=Hola%2C%20quiero%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20torres&type=phone_number&app_absent=0" class="cotizas" target=’_blank’>
						<p>Cotizar</p>

					</a>
				</div>
			</div>
			<div class="image-contai">
				<img src="../assets/img/SistemaTierra/img3.png" alt="Imagen de torre" class="imageT">
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
	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nombre = $_POST["nombre"] ?? '';
		$email = $_POST["email"] ?? '';
		$telefono = $_POST["telefono"] ?? '';
		$mensaje = $_POST["user-input"] ?? '';

		$destinatario = "ismaelaspuacr.5@gmail.com";
		$asunto = "Nuevo mensaje de $email";

		$contenido = "Nombre: $nombre \n";
		$contenido .= "Email: $email \n";
		$contenido .= "Teléfono: $telefono \n";
		$contenido .= "Mensaje: $mensaje";

		$header = "From: no-reply@transformetalgt.com\r\n";
		$header .= "Reply-To: $email\r\n";
		$header .= "X-Mailer: PHP/" . phpversion();

		if (mail($destinatario, $asunto, $contenido, $header)) {
			http_response_code(200);
			echo "Correo enviado exitosamente.";
		} else {
			http_response_code(500);
			echo "Error al enviar el correo.";
		}
	}
	?>