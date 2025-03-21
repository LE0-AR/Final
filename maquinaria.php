<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link
		href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
		rel="stylesheet" />
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="icon" type="image/png" href="assets/img/isotipo.png">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/maquinas.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/chatbot.css">
	<link rel="stylesheet" href="assets/css/content.css">
	<title>TRANSFORMETAL</title>
</head>

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
					<a href="./">
						<i><img src="assets/img/logot.png" alt="100px" ></i>

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
									<li><a href="">Góndolas </a></li>
									<li><a href="">Estanterías </a></li>
									<li><a href="">Racks Industrial</a></li>
								</ul>
							</li>

							<li>
								<a href="#" class="main-category">Torres <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
								<ul class="nav-submenu TorresIrios">
									<li><a href="./public/products/Torre/">Torres Arriostradas y Accesorios</a></li>
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


	<section id="maquina1">

		<div class="section__container header__container">
			<div class="header__image__container" style="  background-image: linear-gradient( to right, #2c3855e6,#647dbb1a),url('assets/img/servicio/principalMaquina.jpeg');">
				<div class="header__content">
					<h1>Maquinaria y Tecnología Avanzada en Transformetal</h1>

				</div>
				<div class="booking__container">
					<h1>
						Transformetal es una empresa especializada en el manejo y transformación de metales mediante maquinaria avanzada. La compañía cuenta con un enfoque en la precisión,
						calidad y eficiencia, gracias a una gama de máquinas industriales que permiten realizar procesos como corte, doblado, soldadura y troquelado con altos estándares
						tecnológicos.
					</h1>
				</div>
			</div>


			<div class="products__container">
				<div class="product__item">
					<h2 class="section__header">Innovación y Calidad en Soluciones Metálicas</h2>
					<p>
						Transformetal utiliza estas máquinas para fabricar una amplia variedad de productos, desde componentes industriales y piezas personalizadas hasta estructuras completas.
						Su enfoque en la tecnología de vanguardia garantiza que puedan satisfacer las necesidades de sectores como la construcción, la industria automotriz, el mobiliario
						metálico y más.
						<br><br>
						<strong>Beneficios de Transformetal</strong>
						<br><br>
						Precisión y calidad: Equipos de última generación para garantizar acabados perfectos.
						Versatilidad: Capacidad de manejar proyectos pequeños y grandes con la misma eficiencia.
						Eficiencia: Procesos rápidos y optimizados que reducen tiempos y costos de producción.
					</p>
				</div>
			</div>


		</div>

		<div class="section__container popular__container">
			<h2 class="section__header">Detalles Técnicos de Nuestra Maquinaria</h2>
			<!--Categiro de los detales productos Inicio-->
			<div class="custom-grid">
				<!-- Tarjeta 1 -->
				<div class="custom-grid-item" onclick="openModal('modal1')">
					<img src="assets/img/servicio/CortadoraLáser.png" alt="Cortadora Láser">
					<span>CORTADORA LÁSER</span>
				</div>
				<!-- Tarjeta 2 -->
				<div class="custom-grid-item" onclick="openModal('modal2')">
					<img src="assets/img/servicio/dobladoraCNC.jpg" alt="Dobladora CNC">
					<span>DOBLADORA CNC</span>
				</div>
				<!-- Tarjeta 3 -->
				<div class="custom-grid-item" onclick="openModal('modal3')">
					<img src="assets/img/servicio/dobladoram.jpg" alt="Dobladora de 4M">
					<span>DOBLADORA DE 4M</span>
				</div>
				<!-- Tarjeta 4 -->
				<div class="custom-grid-item" onclick="openModal('modal4')">
					<img src="assets/img/servicio/SoldadoraLaser.jpg" alt="Soldadora Punteadora">
					<span>SOLDADORA LÁSER</span>
				</div>
				<!-- Tarjeta 5 -->
				<div class="custom-grid-item" onclick="openModal('modal5')">
					<img src="assets/img/servicio/TROQUEDORA.jpg" alt="Troqueladora Press">
					<span>TROQUELADORA PRESS</span>
				</div>
				<!-- Tarjeta 6 -->
				<div class="custom-grid-item" onclick="openModal('modal6')">
					<img src="assets/img/servicio/horno.jpg	" alt="Troqueladora Press">
					<span>HORNO</span>
				</div>
				<!-- Tarjeta 7 -->
				<div class="custom-grid-item" onclick="openModal('modal11')">
					<img src="assets/img/servicio/CABINA_DE_PINTURA_ELECTROTÁTICA.jpg" alt="Troqueladora Press">
					<span>CABINA DE PINTURA ELECTROTÁTICA</span>
				</div>
				<!-- Tarjeta 8 -->
				<div class="custom-grid-item" onclick="openModal('modal8')">
					<img src="assets/img/servicio/SOLDADORA_MIG_MILLER.jpg" alt="Dobladora de 4M">
					<span>SOLDADORA MIG MILLER</span>
				</div>
				<!-- Tarjeta  9-->
				<div class="custom-grid-item" onclick="openModal('modal9')">
					<img src="assets/img/servicio/SOLDADORA_PUNTEADORA.jpg" alt="Soldadora Punteadora">
					<span>SOLDADORA PUNTEADORA</span>
				</div>
				<!-- Tarjeta  10-->
				<div class="custom-grid-item" onclick="openModal('modal10')">
					<img src="assets/img/servicio/CIZALLA_UNIVERSAL.jpg" alt="Troqueladora Press">
					<span>CIZALLA UNIVERSAL</span>
				</div>

				<!-- Tarjeta  11-->
				<div class="custom-grid-item" onclick="openModal('modal7')">
					<img src="assets/img/servicio/SOLDADORA_DE_TORNILLOS_NARANJA.jpg" alt="Dobladora CNC">
					<span>SOLDADORA DE TORNILLOS NARANJA</span>
				</div>
			</div>

			<!-- Modal 1 -->
			<div id="modal1" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: CORTADORA LÁSER</h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: CORTADORA LÁSER</p>
								<p><strong>FABRICANTE</strong>: DXTECH</p>
								<p><strong>MODELO/AÑO</strong>: Dx1530FL3T</p>
								<p><strong>MARCA</strong>: DXTECH</p>
								<p><strong>VOLTAJE (Volts)</strong>: 380 TRIFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (kW)</strong>: 26</p>
								<p><strong>TIPO DE SOLDADURA</strong>: CNC</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 4000 KG</p>
								<p><strong>ALTURA</strong>: 2300 mm</p>
								<p><strong>ANCHO</strong>: 2300 mm</p>
								<p><strong>LARGO</strong>: 5900 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Área de trabajo: 1515x3030mm.</li>
									<li>Potencia de Láser: 1000W.</li>
									<li>Maxima velocidad: 120 mts/min.</li>
									<li>Longitud de corte para tubo: 3 mts.</li>
									<li>Voltaje: 380V, 3HP, 60 Hz.</li>
									<li>Temperatura de trabajo: 10-35°C.</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/CortadoraLáser.png" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Soldar o unir piezas metálicas</p>
					</div>

				</div>
			</div>

			<!-- Modal 2 -->
			<div id="modal2" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: DOBLADORA CNC</h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: DOBLADORA</p>
								<p><strong>FABRICANTE</strong>: DXTECH</p>
								<p><strong>MODELO/AÑO</strong>: DX-80T/2000MM ESA</p>
								<p><strong>MARCA</strong>: DXTECH</p>
								<p><strong>VOLTAJE (Volts)</strong>: 220V TRIFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (kW)</strong>: 8.0 </p>
								<p><strong>TIPO DE MAQUINA</strong>: HIDRÁHULICA</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 400 KG</p>
								<p><strong>ALTURA</strong>: 2400 mm</p>
								<p><strong>ANCHO</strong>: 3100W mm</p>
								<p><strong>LARGO</strong>: 1700 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Forma del eje V: Compensación mecánica</li>
									<li>Fuerza nominal: 800KN</li>
									<li>Longitud de la mesa: 2000 mm</li>
									<li>Distancia entre columnas: 1600mm</li>
									<li>Ángulo de programación: 10-180°</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/dobladoraCNC.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Doblar Lamina a diferentes angulos y grosores</p>
					</div>

				</div>
			</div>

			<!-- Modal 3 -->
			<div id="modal3" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: DOBLADPRA DE 4M</h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: DOBLADORA </p>
								<p><strong>FABRICANTE</strong>: MAZAK</p>
								<p><strong>MODELO/AÑO</strong>: 125T/4M</p>
								<p><strong>MARCA</strong>: MAZAK</p>
								<p><strong>VOLTAJE (Volts)</strong>: 380V TRIFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (kW)</strong>: 7.5 KW</p>
								<p><strong>TIPO DE SOLDADURA</strong>: HIDRÁULICA</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 10000 KG</p>
								<p><strong>ALTURA</strong>: 2.35 mts</p>
								<p><strong>ANCHO</strong>: 1.47 mts</p>
								<p><strong>LARGO</strong>: 4.02 mts</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Modelo: 125T4M.</li>
									<li>presión nominal 800KN 1000KN 1250KN 1300KN.</li>
									<li>La profundidad de la garganta 320 mm 320 mm 400 mm 400 mm.</li>
									<li>Golpe deslizante 150 mm 200 mm 200 mm 200 mm.</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/dobladoram.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Doblar Lamina a diferentes angulos y grosores</p>
					</div>

				</div>
			</div>

			<!-- Modal 4 -->
			<div id="modal4" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: SOLDADORA LÁSER </h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: SOLDADORA LÁSER </p>
								<p><strong>FABRICANTE</strong>: KELIDA</p>
								<p><strong>MODELO/AÑO</strong>: AJ-H1000WJ</p>
								<p><strong>MARCA</strong>: KELIDA</p>
								<p><strong>VOLTAJE (Volts)</strong>: 220V MONOFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (kW)</strong>: 5 </p>
								<p><strong>TIPO DE MAQUINA</strong>: LÁSER</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 127 KG</p>
								<p><strong>ALTURA</strong>: 1350 mm</p>
								<p><strong>ANCHO</strong>: 800 mm</p>
								<p><strong>LARGO</strong>: 1550 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Tipo de láser : Láser de fibra</li>
									<li>Fuerza nominal: 800KN</li>
									<li>Enfriador: Agua</li>
									<li>Ancho de escaneo: 10 ~150mm</li>
									<li>Temperatura ambiente de funcionamiento: 0°C - 40°</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/SoldadoraLaser.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Soldadura por metodo Láser</p>
					</div>

				</div>
			</div>

			<!-- Modal 5 -->
			<div id="modal5" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: TROQUELADORA PRESS </h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: TROQUELADORA </p>
								<p><strong>FABRICANTE</strong>: MARCELLO COTELLI</p>
								<p><strong>MODELO/AÑO</strong>: 1976</p>
								<p><strong>MARCA</strong>: MARCELLO COTELLI</p>
								<p><strong>VOLTAJE (Volts)</strong>: 220V TRIFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (kW)</strong>: 1.5 </p>
								<p><strong>TIPO DE MAQUINA</strong>: LÁSER</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 2500 KG</p>
								<p><strong>ALTURA</strong>: 1350 mm</p>
								<p><strong>ANCHO</strong>: 1080 mm</p>
								<p><strong>LARGO</strong>: 720 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Presion de corte: 40.000 Kg.</li>
									<li>Golpes por minuto: 65</li>
									<li>Carrera regulable: 5-100 mm.</li>
									<li>Luz del molde: 330 mm</li>
									<li>Diametro del portamoldes: 350 mm.</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/TROQUEDORA.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: roquelado de laminas, en diferente espesor y tipo de metal.
							<br>
							<strong>Los formas o figuras de troquelado pueden ser:</strong>
							<br>
							Redondo, Cuadrado, Rectangular, Ojo Chino
						</p>
					</div>
				</div>
			</div>
			<!-- Modal 6 -->
			<div id="modal6" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: HORNO </h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: HORNO </p>
								<p><strong>FABRICANTE</strong>: TRANSFORMETAL</p>
								<p><strong>MODELO/AÑO</strong>: 2020</p>
								<p><strong>MARCA</strong>: SELECOM</p>
								<p><strong>VOLTAJE (Volts)</strong>: N/A</p>
							</div>
							<div class="columna">
								<p><strong>TEMPERATURA MAX.</strong>: 250 °C </p>
								<p><strong>TIPO DE MAQUINA</strong>: CALENTADOR</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: N/A</p>
								<p><strong>ALTURA</strong>: 2450 mm</p>
								<p><strong>ANCHO</strong>: 3490 mm</p>
								<p><strong>LARGO</strong>: 2900 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Aplicar calor a las piezas pintadas con pintura electrostatica y polimerizar la textura y color.</li>

								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/horno.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Aplicar calor a las piezas pintadas con pintura electrostatica y polimerizar la textura y color.
							<br>

						</p>
					</div>
				</div>
			</div>

			<!-- Modal 7 -->
			<div id="modal7" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: SOLDADORA DE TORNILLOS</h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: SOLDADORA DE TORNILLOS </p>
								<p><strong>FABRICANTE</strong>: MINDER HIGTECH</p>
								<p><strong>MODELO/AÑO</strong>: RSR2500</p>
								<p><strong>MARCA</strong>: MINDER HIGTECH</p>
								<p><strong>VOLTAJE (Volts)</strong>: 220V MONOFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (KW)</strong>: 2.5Kw </p>
								<p><strong>TIPO DE SOLDADURA</strong>: STUD</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 30KG</p>
								<p><strong>ALTURA</strong>: 210 mm</p>
								<p><strong>ANCHO</strong>: 200 mm</p>
								<p><strong>LARGO</strong>: 450 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>- El rango de soldadura: M3 - M8. </li>
									<li>Corriente de soldadura: 300-2500 Amp. </li>
									<li>La velocidad de soldadura:∅ 28-10pcs/min. </li>
									<li>La capacitancia: 108000uF. </li>
									<li>Interruptor de alimentación: 225 A</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/SOLDADORA_DE_TORNILLOS_NARANJA.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Soldar tornillos.
							<br>

						</p>
					</div>
				</div>
			</div>

			<!-- Modal 8 -->
			<div id="modal8" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: SOLDADORA MIG MILLER </h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: SOLDADORA MIG MILLER </p>
								<p><strong>FABRICANTE</strong>: MILLER</p>
								<p><strong>MODELO/AÑO</strong>: MILLERMATIC 252</p>
								<p><strong>MARCA</strong>: MILLER</p>
								<p><strong>VOLTAJE (Volts)</strong>: 220V MONOFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (KW)</strong>: 6.65 </p>
								<p><strong>TIPO DE SOLDADURA</strong>: MIG</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 36 KG</p>
								<p><strong>ALTURA</strong>: 1521 mm</p>
								<p><strong>ANCHO</strong>: 330 mm</p>
								<p><strong>LARGO</strong>: 1080 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>250 A a 28 Vcc</li>
									<li>Control de voltaje infinito con medidores digitales autocalibrados.</li>
									<li>Sistema de aluminio de servicio pesado con dos rodillos de alimentación.</li>
									<li>Antorcha MIG M-25 de 15 pies (4,6 m), 250 A</li>
									<li>Cable de masa de 10 pies (3 m) con pinza.</li>
									<li>Cordón de alimentación industrial de 10 pies (3 m) con enchufe en el modelo 200/230 V.</li>
									<li>Puntas adicionales.</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/SOLDADORA_MIG_MILLER.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Soldar o unir piezas metalicas.
							<br>

						</p>
					</div>
				</div>
			</div>


			<!-- Modal 11 -->
			<div id="modal11" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: CABINA DE PINTURA ELECTROTÁTICA </h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: CABINA DE PINTURA </p>
								<p><strong>FABRICANTE</strong>: TRANSFORMETAL</p>
								<p><strong>MODELO/AÑO</strong>: 2020</p>
								<p><strong>MARCA</strong>: SELECOM</p>
								<p><strong>VOLTAJE (Volts)</strong>: 110V MONOFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>MATERIAL</strong>: LAMINA GALVANIZADA 1/16'</p>
								<p><strong>TIPO DE MAQUINA</strong>: RECOLECTORA DE POLVO</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: N/A</p>
								<p><strong>ALTURA</strong>: 2380 mm</p>
								<p><strong>ANCHO</strong>: 3480 mm</p>
								<p><strong>LARGO</strong>: 2500 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Espacio donde se pinta con pintura electrostatica diferentes piezas de metal.</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/CABINA_DE_PINTURA_ELECTROTÁTICA.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Espacio hermetico para pintar con polvo electrostatico.
							<br>

						</p>
					</div>
				</div>
			</div>

			<!-- Modal 9 -->
			<div id="modal9" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: SOLDADORA PUNTEADORA </h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: SOLDADORA PUNTEADORA </p>
								<p><strong>FABRICANTE</strong>: LORS MACHINERY</p>
								<p><strong>MODELO/AÑO</strong>: 4608NA</p>
								<p><strong>MARCA</strong>: TECNA</p>
								<p><strong>VOLTAJE (Volts)</strong>: 220V MONOFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (KW)</strong>: 7.37 </p>
								<p><strong>TIPO DE SOLDADURA</strong>: PUNTEADORA</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 122 KG</p>
								<p><strong>ALTURA</strong>: 1150 mm</p>
								<p><strong>ANCHO</strong>: 250 mm</p>
								<p><strong>LARGO</strong>: 850 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>KVA: 50</li>
									<li>Tensión: 220 / 440</li>
									<li>Corriente máxima de soldadura en acero: 3350</li>
									<li>Profundidad de la garganta: 9" </li>
									<li>Corto circuito máximo: 15000</li>
									<li>Fuerza electro @ 87 psi - 209 lbs</li>
									<li>Carrera: 1-3/4" - 3-1/4</li>
									<li>Diámetro del soporte: 1"</li>
									<li>Diámetro del brazo: 1.575</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/SOLDADORA_PUNTEADORA.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Soldar con el metodo de punto.
							<br>

						</p>
					</div>
				</div>
			</div>

			<!-- Modal 10 -->
			<div id="modal10" class="custom-modal">
				<button class="close-button btn">&times;</button>
				<div class="ficha">
					<div class="header">
						<h1>NOMBRE: CIZALLA UNIVERSAL </h1>
						<div class="revision">
							<img src="assets/img/logo.png" alt="Logo" class="logo">
						</div>
					</div>
					<div class="tabla-principal">
						<div class="fila">
							<div class="columna">
								<p><strong>MAQUINA - EQUIPO</strong>: CIZALLA UNIVERSAL </p>
								<p><strong>FABRICANTE</strong>: MAZAK</p>
								<p><strong>MODELO/AÑO</strong>: Q35Y-16</p>
								<p><strong>MARCA</strong>: MAZAK</p>
								<p><strong>VOLTAJE (Volts)</strong>: 220V MONOFÁSICO</p>
							</div>
							<div class="columna">
								<p><strong>POTENCIA (KW)</strong>: 5.5 </p>
								<p><strong>TIPO DE SOLDADURA</strong>: HIDRÁULICO</p>
								<p><strong>CONECCIÓN A TIERRA</strong>: SÍ</p>
							</div>
						</div>
					</div>
					<div class="caracteristicas">
						<h2>CARACTERÍSTICAS GENERALES</h2>
						<div class="fila">
							<div class="columna">
								<p><strong>PESO</strong>: 1900 KG</p>
								<p><strong>ALTURA</strong>: 1850 mm</p>
								<p><strong>ANCHO</strong>: 810 mm</p>
								<p><strong>LARGO</strong>: 1660 mm</p>
							</div>
							<div class="columna">
								<h3>CARACTERÍSTICAS TÉCNICAS:</h3>
								<ul>
									<li>Barra de corte Acero redondo milímetro 45</li>
									<li>Cizallamiento a 90° de acero de ángulos iguales milímetro 120x120x12</li>
									<li>Viga de acero milímetro 126x74x5</li>
									<li>Presión de punzonado Tonelada 60</li>
									<li>Resistencia de los materiales N/mm² ≤450</li>
								</ul>
							</div>
							<div class="columna">
								<h3>FOTO DE LA MÁQUINA/EQUIPO</h3>
								<img src="assets/img/servicio/CIZALLA_UNIVERSAL.jpg" alt="Soldadora MIG HOBART">
							</div>
						</div>
					</div>
					<div class="funcion">
						<p><strong>FUNCIÓN</strong>: Troqueladora, Perforadora, Aplanadora, Cortadora.
							<br>

						</p>
					</div>
				</div>
			</div>


			<!--Categiro de los detales productos Fin-->

			<div class="container">
				<h2 class="section__header">Videos de Maquinaria y Procesos</h2>

				<!-- Grid -->
				<div class="grid">
					<!-- Tutorial Items -->
					<div class="grid-item" data-video="https://www.youtube.com/embed/3P1MfIBrbR4?si=hNLMlPFFbt9gBstT">
						<img src="assets/img/servicio/CortadoraLáser.png" alt="Transitions">
						<span>Cortadora laser</span>
					</div>
					<div class="grid-item" data-video="https://www.youtube.com/embed/3P1MfIBrbR4?si=hNLMlPFFbt9gBstT">
						<img src="assets/img/servicio/dobladoraCNC.jpg" alt="Transitions">
						<span>Dobladora CNC</span>
					</div>
					<div class="grid-item" data-video="https://www.youtube.com/embed/3P1MfIBrbR4?si=hNLMlPFFbt9gBstT">
						<img src="assets/img/servicio/dobladoram.jpg" alt="Animations">
						<span>Dobladora de 4M</span>
					</div>
					<div class="grid-item" data-video="https://www.youtube.com/embed/3P1MfIBrbR4?si=hNLMlPFFbt9gBstT">
						<img src="assets/img/servicio/SoldadoraLaser.jpg" alt="Effects">
						<span>Soldadora Láser</span>
					</div>
					<div class="grid-item" data-video="https://www.youtube.com/embed/3P1MfIBrbR4?si=hNLMlPFFbt9gBstT">
						<img src="assets/img/servicio/TROQUEDORA.jpg" alt="Tips">
						<span>Troqueladora Press</span>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal" id="videoModal">
				<div class="modal-content">
					<iframe frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<button class="close-button">✖</button>
				</div>
			</div>


	</section>



	<!--chatbot Inicio-->
	<!--chatbot de whatsapp-->
	<div class="message-wrapper">
		<div class="message-toggle">
			<a href="https://api.whatsapp.com/send/?phone=50237673705&type=phone_number&app_absent=0" target="_blank">
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
		<form id="chat-form" method="POST" action="">
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



</body>


<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
<script src="assets/js/menu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="assets/js/chat.js"></script>
<script src="assets/js/section.js"></script>

</html>