<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRANSFORMETAL</title>
  <link rel="stylesheet" href="assets/css/estiloContacto.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="assets/css/chatbot.css">
</head>
<style>
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: none;
  }

  ul li {
    margin: 5px 0;
  }

  ul li a {
    color: #fff;
    text-decoration: none;
  }

  ul li a:hover {
    text-decoration: underline;
  }
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
          <a href="./">
            <i><img src="assets/img/logot.png" alt="100px"></i>

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
                  <li><a href="../control/">Instalacion de torre arriostrada</a></li>
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


  <main data-barba="container">
    <div id="headContent"></div>
    <section id="form">
      <div class="container-form">
        <div class="info-form">
          <h2>Contáctanos</h2>
          <p>En Transformetal, ofrecemos soluciones integrales en metalmecánica para diversos sectores, adaptándonos a las necesidades específicas de cada cliente. Desde diseño y fabricación hasta instalación, garantizamos calidad, durabilidad y estética en todos nuestros productos.</p>
          <a href="#"><i class="fa fa-phone"></i> 3767-3973</a>
          <a href="#"> <i class="fa fa-envelope"></i> carlos.yoc@transformetalgt.com</a>
          <a href="#"><i class="fa fa-map-marked"></i> 8a calle 26-30 zona 4 Mixco, Col. <br>Bosques de San Nicolas, Guatemala, C.A</a>
        </div>
        <!--form de contacto inicio  -->
        <form action="" method="post" autocomplete="off">
          <input type="text" name="nombre" placeholder="Ingrese su nombre" class="campo" required>
          <input type="email" name="email" placeholder="ejemplo@gmail.com" class="campo" required>
          <textarea name="mensaje" placeholder="Escriba su mensaje..." required></textarea>
          <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>
        <!--form de contacto fin -->


      </div>
    </section>
    <div class="direc">
      <h2>Nos ubicamos en:</h2>
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1154.7009105206891!2d-90.56334079831278!3d14.662042220872449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a174b929d691%3A0xaee34dd4f3e9e84d!2sTRANSFORMETAL!5e1!3m2!1ses-419!2sgt!4v1734624497517!5m2!1ses-419!2sgt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <br><br><br><br><br>

  </main>

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

  <!--Footer-->

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
        <a href="#" class="social-icon facebook" style=" background: url('./assets/img/icon/footer/fb.png') no-repeat center/cover;"></a>
        <a href="#" class="social-icon whatsapp" style=" background: url('./assets/img/icon/footer/wsp.png') no-repeat center/cover;"></a>
        <a href="#" class="social-icon instagram" style=" background: url('./assets/img/icon/footer/ig.png') no-repeat center/cover;"></a>
        <a href="#" class="social-icon youtube" style=" background: url('./assets/img/icon/footer/yt.png') no-repeat center/cover;"></a>
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


  <div id="loader">
  </div>
  

  <script src="assets/js/menu.js"></script>

  <script src="assets/js/chat.js"></script>
  <script>
    document.getElementById("send-message").addEventListener("click", function(event) {
      event.preventDefault(); // Evita el envío estándar del formulario

      // Recoge los datos del formulario
      var formData = new FormData(document.getElementById("chat-form"));

      // Envía los datos a través de AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "views/home.php", true); // Cambia "ruta_de_tu_php.php" por el nombre real de tu archivo PHP

      xhr.onload = function() {
        if (xhr.status === 200) {
          // Limpia el campo del mensaje si se envía correctamente
          document.getElementById("user-input").value = "";
        }
      };

      xhr.send(formData); // Envía los datos del formulario
    });
  </script>
</body>

</html>

<?php
if (isset($_POST["enviar"])) {
  // Validación y sanitización de los datos recibidos
  $nombre = filter_var(trim($_POST["nombre"]), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $mensaje = filter_var(trim($_POST["mensaje"]), FILTER_SANITIZE_STRING);

  // Verificar si el email es válido
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $destinatario = "leonardoacrn12@gmail.com"; // Dirección de destino
    $asunto = "Nuevo mensaje de $email"; // Asunto del correo

    // Preparar el contenido del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Mensaje: $mensaje";

    // Cabeceras del correo
    $header = "mensaje del apartado de contacto";

    // Enviar el correo
    $mail = mail($destinatario, $asunto, $contenido, $header);

    // Verificar si el correo se envió correctamente
    if ($mail) {
      echo "<script>window.location.href = 'contacto.php';</script>";
    } else {
      echo "<script>alert('El correo no se pudo enviar, intente nuevamente :('); window.location.href = 'contacto.php';</script>";
    }
  } else {
    // Si el email no es válido
    echo "<script>alert('Por favor ingrese un email válido.'); window.location.href = 'contacto.php';</script>";
  }
}
?>