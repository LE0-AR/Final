  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSFORMETAL</title>
    <link rel="stylesheet" href="assets/css/Sectores.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/isotipo.png">
    <link rel="stylesheet" href="assets/css/chatbot.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  </head>

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
            <a href="./">
              <i><img src="assets/img/logot.png" alt="100px" class="logoTipo"></i>

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

    <div class="section">
      <!--Telecomunicaciones Inicio-->
      <section class="sectores">
        <h2 class="titulo">SECTORES</h2>
        <p class="descripcion">
          Nos especializamos en atender las necesidades de cada sector de la industria,
          ofreciendo soluciones innovadoras, específicas y adaptadas para optimizar procesos,
          garantizar calidad y fomentar el crecimiento sostenible en todos los sectores donde
          puede intervenir la metalmecánica.
        </p>
        <section id="SectoresLinea"><img src="./assets/img/sectores/divisor.png" alt="" class="SectoresLinea"></section>
        <div class="sector" id="Telcos">
          <img src="./assets/img/sectores/sector/telecomunicaciones.jpg" alt="Torre de telecomunicaciones" class="imagen">
          <div class="contenido">
            <h3 class="subtitulo">SECTOR DE TELECOMUNICACIONES</h3>
            <p class="texto">
              Nuestros productos y soluciones destacan por ser de alta calidad, esenciales
              para garantizar que las redes funcionen de manera eficiente y confiable.
            </p>
            <p class="texto">
              Desde estructuras robustas para torres de comunicaciones hasta componentes precisos
              para equipos de transmisión, nuestra experiencia en metalmecánica asegura que cada
              elemento esté diseñado para soportar las exigencias del entorno actual.
            </p>
            <a href="#" class="button">Ver Productos</a>
          </div>
        </div>

        <a class="Media">
          <p>ALGUNOS DE NUESTROS PRODUCTOS</p>
        </a>

        <section class="contenedor-imagenes swiper">
          <div class="swiper-wrapper">
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/telcos/microdata.png" alt="Imagen 1">
              <p>Micro-Datacenter</p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/telcos/rack.png" alt="Imagen 2">
              <p>Rack</p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/telcos/gabinete.png" alt="Imagen 3">
              <p>Gabinete de poste</p>
            </div><!--
              <div class="imagen-placeholder swiper-slide">
                <img src="img/gab1-2.png" alt="Imagen 4">
                <p>Título 4</p>
              </div>
              -->
          </div>

          <div class="swiper-pagination"></div><br>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </section>


        <div class="seccion-titulo">
          <h2 class="title">UNA OPCIÓN INNOVADORA</h2>
          <p class="description">
            En Transformetal, fabricamos productos que aseguran tanto la eficiencia como la confiabilidad de las redes,
            destacando las torres de comunicaciones y los equipos de transmisión. Nos mantenemos a la vanguardia a través de la incorporación
            de técnicas avanzadas y soluciones innovadoras. Adaptamos nuestros productos a las nuevas demandas del sector de las telecomunicaciones,
            lo cual garantiza la eficiencia.
          </p>
          <br>
          <p class="description">
            Además, nos preocupamos por el futuro y por eso, también implementamos prácticas sostenibles en cada una de las etapas de nuestra
            producción. Transformetal, no sólo fabricamos productos de alta calidad, sino que también nos aseguramos de que nuestros procesos
            construyan un entorno más verde.
          </p>
        </div>
        <h2 class="title">SERVICIOS DE VALOR AGREGADO </h2>
        <section class="contenedor-beneficios">

          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/sector/T_1calidad_superior.png" alt=""></div>
            <div class="beneficio-titulo">CALIDAD SUPERIOR</div>
            <div class="beneficio-texto">Utilizamos materiales de primera y técnicas avanzadas para ofrecer productos que cumplen con los más altos estándares de la industria.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/sector/T_2innovacion_continua.png" alt="" id="icon"></div>
            <div class="beneficio-titulo">INNOVACIÓN CONTINUA</div>
            <div class="beneficio-texto">Nos mantenemos a la vanguardia de las tendencias tecnológicas, adaptando nuestras soluciones a las necesidades cambiantes del sector.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/sector/T_3compromiso_ambiental.png" alt=""></div>
            <div class="beneficio-titulo">COMPROMISO AMBIENTAL</div>
            <div class="beneficio-texto">Implementamos prácticas sostenibles en nuestros procesos de producción, contribuyendo a un futuro más verde.</div>
          </div>

        </section>

        <section class="linea-final"></section>

      </section>
      <!--Telecomunicaciones Fin-->


      <!--Electrica Inicio-->
      <section class="sectores" id="Electrico">

        <div class="sector">
          <img src="./assets/img/sectores/electricidad/electricidad.jpg" alt="Torre de telecomunicaciones" class="imagen">
          <div class="contenido">
            <h3 class="subtitulo">SECTOR ELÉCTRICO</h3>
            <p class="texto">
              En el sector eléctrico, la precisión y la calidad son esenciales.
              La metalmecánica se convierte en tu aliado perfecto, ofreciendo productos
              y soluciones que garantizan eficiencia y seguridad en tus proyectos.
            </p>
            <p class="texto">
              Nuestros productos cumplen con los más altos estándares y están respaldados
              por un equipo técnico especializado que te asesora en cada etapa. Con 22
              nosotros, su proyecto está en manos expertas.
            </p>
            <a href="#" class="button">Ver Productos</a>
          </div>
        </div>

        <a class="Media">
          <p>ALGUNOS DE NUESTROS PRODUCTOS</p>
        </a>

        <section class="contenedor-imagenes swiper">
          <div class="swiper-wrapper">
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/electricidad/platina.png" alt="Imagen 1">
              <p>PLATINA GALVANIZADA</p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/electricidad/escalera.png" alt="Imagen 2">
              <p>ESCALERA DE CABLES</p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/electricidad/gabinete_electrico.png" alt="Imagen 3">
              <p>GABINETE ELÉCTRICO</p>
            </div><!--
            <div class="imagen-placeholder swiper-slide">
                <img src="img/gab1-2.png" alt="Imagen 4">
                <p>Título 4</p>
            </div>
            -->
          </div>

          <div class="swiper-pagination"></div><br>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </section>


        <div class="seccion-titulo">
          <h2 class="title">ASESORÍA ESPECIALIZADA</h2>
          <p class="description">
            Nos destacamos por incorporar las últimas tecnologías
            en nuestros procesos de fabricación, desarrollando productos
            que optimizan la eficiencia y seguridad de sus instalaciones.
            Desde soportes hasta gabinetes eléctricos, trabajamos con usted
            para ofrecer soluciones únicas que combinan funcionalidad, calidad
            y estética, asegurando el éxito de su proyecto.

          </p>

        </div>
        <h2 class="title">SERVICIOS DE VALOR AGREGADO </h2>
        <section class="contenedor-beneficios">

          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/electricidad/servicio_personalizado.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">PRODUCTOS INTEGRADOS</div>
            <div class="beneficio-texto">Diseñamos y construimos productos eléctricos y electrónicos protegidos con gabinetes y cajas en metalmecánica, fabricados y adecuados a sus necesidades.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/electricidad/tecnologia_innovadora.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">INNOVACIÓN CONTINUA</div>
            <div class="beneficio-texto">Contamos con 1000 m² de planta de producción. Orgullosamente somos una planta de metalmecánica 100% guatemalteca.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/electricidad/soporte_tecnico.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">maquinaria DE ÚLTIMA GENERACIÓN</div>
            <div class="beneficio-texto" style="margin-top: -10px;">Generación de corte CNC láser, dobladora inteligente y soldadura láser. Fabricamos sus productos con maquinaria rápida y precisa.</div>
          </div>

        </section>

        <section class="linea-final"></section>

      </section>
      <!--Electrica Fin-->

      <!--Mobiliario Inicio-->
      <section class="sectores" id="Mobiliario">

        <div class="sector">
          <img src="./assets/img/sectores/Mobiliario/mobiliario.jpg" alt="Torre de telecomunicaciones" class="imagen">
          <div class="contenido">
            <h3 class="subtitulo">SECTOR DE MOBILIARIO URBANO</h3>
            <p class="texto">
              En Transformetal, entendemos que cada ciudad merece ser un lugar donde la funcionalidad
              y el diseño se encuentran. Ofrecemos soluciones de metalmecánica que transforman los
              espacios públicos, aportando tanto estética como durabilidad.
            </p>
            <p class="texto">
              Buscamos ir más allá de lo convencional. Innovamos en cada diseño para adaptarnos a
              las necesidades específicas de cada espacio urbano, ofreciendo productos personalizados
              que reflejan el carácter único de cada ciudad..
            </p>
            <a href="#" class="button">Ver Productos</a>
          </div>
        </div>

        <a class="Media">
          <p>ALGUNOS DE NUESTROS PRODUCTOS</p>
        </a>

        <section class="contenedor-imagenes swiper">
          <div class="swiper-wrapper">
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/Mobiliario/banca.png" alt="Imagen 1">
              <p>BANCA METÁLICA </p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/Mobiliario/mupi.png" alt="Imagen 2">
              <p>MUPI </p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/Mobiliario/basureros.png" alt="Imagen 3">
              <p>BASUREROS DE METAL</p>
            </div><!--
            <div class="imagen-placeholder swiper-slide">
                <img src="img/gab1-2.png" alt="Imagen 4">
                <p>Título 4</p>
            </div>
            -->
          </div>

          <div class="swiper-pagination"></div><br>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </section>


        <div class="seccion-titulo">
          <h2 class="title">CALIDAD CERTIFICADA</h2>
          <p class="description">
            Nuestros procesos de fabricación cumplen con los estándares más altos de calidad, asegurando productos confiables y
            seguros. Cada detalle cuenta para garantizar que nuestras soluciones cumplan con las expectativas de durabilidad y
            funcionalidad que nuestros clientes merecen. Transforme su ciudad en un lugar más acogedor y funcional. Descubra
            cómo nuestras soluciones de metalmecánica pueden hacer la diferencia en el urbanismo. Juntos, crearemos espacios
            que inviten a la comunidad a disfrutar.
          </p>

        </div>
        <h2 class="title">SERVICIOS DE VALOR AGREGADO </h2>
        <section class="contenedor-beneficios">

          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/Mobiliario/M1_durabilidad.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">DURABILIDAD</div>
            <div class="beneficio-texto">Fabricados con materiales de alta resistencia, nuestros productos están diseñados para soportar las inclemencias del tiempo y el uso constante.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/Mobiliario/M2_estetica.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">ESTÉTICA</div>
            <div class="beneficio-texto">Con una variedad de diseños y acabados, nuestras soluciones no solo son funcionales, sino que también embellecen el paisaje urbano.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/Mobiliario/M3_sostenibilidad.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">SOSTENIBILIDAD</div>
            <div class="beneficio-texto">Promovemos prácticas responsables al ofrecer productos que contribuyen a un entorno más limpio y saludable.</div>
          </div>

        </section>

        <section class="linea-final"></section>

      </section>
      <!--Mobiliario Fin-->

      <!--Exhibicion Inicio-->
      <section class="sectores" id="Exhibicion">

        <div class="sector">
          <img src="./assets/img/sectores/Exhibicion/exhibicion.jpg" alt="Torre de telecomunicaciones" class="imagen">
          <div class="contenido">
            <h3 class="subtitulo">SECTOR DE EXHIBICIÓN Y ALMACENAJE</h3>
            <p class="texto">
              La presentación de productos es fundamental para atraer y retener a los clientes en el
              mundo del comercio. La metalmecánica es capaz de ofrecer soluciones innovadoras y personalizadas
              que transforman tus espacios de exhibición en verdaderos imanes de atención.

            </p>

            <a href="#" class="button">Ver Productos</a>
          </div>
        </div>

        <a class="Media">
          <p>ALGUNOS DE NUESTROS PRODUCTOS</p>
        </a>

        <section class="contenedor-imagenes swiper">
          <div class="swiper-wrapper">
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/Exhibicion/E1_estanteria.png" alt="Imagen 1">
              <p>ESTANTERÍA </p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/Exhibicion/E2_rack_industrial.png" alt="Imagen 2">
              <p>RACK INDUSTRIAL </p>
            </div>
            <div class="imagen-placeholder swiper-slide">
              <img src="./assets/img/sectores/Exhibicion/E3_gondola.png" alt="Imagen 3">
              <p>GÓNDOLA</p>
            </div><!--
            <div class="imagen-placeholder swiper-slide">
                <img src="img/gab1-2.png" alt="Imagen 4">
                <p>Título 4</p>
            </div>
            -->
          </div>

          <div class="swiper-pagination"></div><br>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </section>


        <div class="seccion-titulo">
          <h2 class="title">DISEÑO COMERCIAL</h2>
          <p class="description">
            Somos especialistas en el diseño de productos que optimizan los espacios comerciales,
            adaptándonos a las necesidades de exhibición, almacenamiento industrial y promoción.
            Con nuestros productos metálicos, los comercios ganan funcionalidad y estilo. Nuestros
            productos están fabricados para soportar el uso intensivo de los entornos comerciales
            más exigentes, mientras mantienen un diseño moderno que potencia la imagen de su negocio.
          </p>

        </div>
        <h2 class="title">SERVICIOS DE VALOR AGREGADO </h2>
        <section class="contenedor-beneficios">

          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/Exhibicion/E1_calidad_superior.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">VERSATILIDAD</div>
            <div class="beneficio-texto">Ofrecemos una amplia gama de diseños adaptables a cualquier tipo de producto y espacio, asegurando que cada exhibición resalte lo mejor de su oferta.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/Exhibicion/E2_versatilidad.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">CALIDAD</div>
            <div class="beneficio-texto">Nuestras estructuras están fabricadas con materiales de alta calidad, lo que garantiza que puedan soportar el uso del día a día.</div>
          </div>
          <div class="beneficio">
            <div class="beneficio-icono"><img src="./assets/img/sectores/Exhibicion/E3_optimizacion.png" alt=""></div>
            <div class="beneficio-titulo" id="elctr">PUESTA A PUNTO EN PLANTA</div>
            <div class="beneficio-texto">Integramos una selección de productos con sus requisitos específicos para ofrecerle una solución única y personalizada.</div>
          </div>

        </section>


      </section>
      <!--Exhibicion Fin-->



      <section class="sectores">
        <h2 class="tld"> <img src="./assets/img/sectores/textoFInal}.png" alt="" style="width:600px; height:200px;"></h2>
        <p class="descripcion" style="margin-top: -70px;">
          Transformamos sus ideas en realidad, acompañándolo desde el diseño hasta el desarrollo de cualquier producto
          en metalmecánica. Contáctenos hoy y descubra cómo nuestras soluciones personalizadas pueden impulsar el crecimiento
          y éxito de su negocio.



        </p>
        <a href="#" class="ContactoNuevo">Contáctenos</a>

      </section>



    </div>




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


    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

    <script src="assets/js/menu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery-3.2.1.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="assets/js/chat.js"></script>
  </body>

  </html>