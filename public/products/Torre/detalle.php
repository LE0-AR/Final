<?php
include '../../../model/autolad/conexcion.php';

// Definir URL base dinámica
$base_url = sprintf(
    "%s://%s/transformetal/app/app/",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
);

if (isset($_GET['id'])) {
    $hash = mysqli_real_escape_string($connect, $_GET['id']);

    // Obtener el ID real usando el hash
    $sql = "SELECT id FROM productos WHERE MD5(CONCAT(id, 'transformetal')) = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "s", $hash);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $producto_id = $row['id'];

        // Obtener datos del producto
        $sql = "SELECT * FROM productos WHERE id = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "i", $producto_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $producto = mysqli_fetch_assoc($result);

        // Obtener características
        $sql_caracteristicas = "SELECT * FROM caracteristicas WHERE producto_id = ? AND titulo != 'N/A' AND descripcion != 'N/A'";
        $stmt = mysqli_prepare($connect, $sql_caracteristicas);
        mysqli_stmt_bind_param($stmt, "i", $producto_id);
        mysqli_stmt_execute($stmt);
        $result_caracteristicas = mysqli_stmt_get_result($stmt);

        // Obtener especificaciones
        $sql_especificaciones = "SELECT * FROM especificaciones_tecnicas WHERE producto_id = ? AND titulo != 'N/A' AND descripcion != 'N/A'";
        $stmt = mysqli_prepare($connect, $sql_especificaciones);
        mysqli_stmt_bind_param($stmt, "i", $producto_id);
        mysqli_stmt_execute($stmt);
        $result_especificaciones = mysqli_stmt_get_result($stmt);

        // Obtener imágenes secundarias
        $sql_imagenes = "SELECT * FROM imagenes_secundarias WHERE producto_id = ? LIMIT 3";
        $stmt = mysqli_prepare($connect, $sql_imagenes);
        mysqli_stmt_bind_param($stmt, "i", $producto_id);
        mysqli_stmt_execute($stmt);
        $result_imagenes = mysqli_stmt_get_result($stmt);
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo htmlspecialchars($producto['nombre']); ?> - TRANSFORMETAL</title>
            <link rel="stylesheet" href="../../css/DetalleProdcutos.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
            <link rel="icon" type="image/png" href="../../../assets/img/isotipo.png">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <link rel="stylesheet" href="../../../assets/css/style.css">
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
                            <a href="../../../">
                                <i><img src="../../../assets/img/logot.png" alt="100px"></i>

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
                                            <li><a href="../Telcos/index.php#gabinetes">Gabinetes</a></li>
                                            <li><a href="../Telcos/index.php#racks">Racks</a></li>
                                            <li><a href="../Telcos/index.php#bandejas">Bandejas</a></li>
                                            <li><a href="../Telcos/index.php#rieles">Riel</a></li>
                                            <li><a href="../Telcos/index.php#escalerillas">Escalerilla</a></li>
                                            <li><a href="../Telcos/index.php#planta_externa">Planta Externa</a></li>
                                            <li><a href="../Telcos/index.php#planta_interna">Planta Interna</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="main-category">Planta Externa y Electricidad<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                                        <ul class="nav-submenu plantaExterna">
                                            <li><a href="../Electricidad/index.php#gabinetes">Gabinetes</a></li>
                                            <li><a href="../Electricidad/index.php#cajas">Cajas</a></li>
                                            <li><a href="../Electricidad/index.php#soportes_herrajes">Soportes y Herrajes</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="main-category">Exhibición y Almacenes <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                                        <ul class="nav-submenu Almacenes">
                                            <li><a href="../almacenaje/index.php#Gondolas">Góndolas </a></li>
                                            <li><a href="../almacenaje/index.php#estanterias">Estanterías </a></li>
                                            <li><a href="../almacenaje/index.php#Rack_Industrial">Racks Industrial</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="main-category">Mobiliario Urbano <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                                        <ul class="nav-submenu paneles">
                                            <li><a href="../Mobiliario/index.php#Basureros">Basureros </a></li>
                                            <li><a href="../Mobiliario/index.php#Paneles">Paneles decorativos</a></li>
                                            <li><a href="../Mobiliario/index.php#Mupis">Mupis </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="main-category">Torres <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                                        <ul class="nav-submenu Mobiliario">
                                            <li><a href="../Torre/index.php#Secciones">Torres Arriostradas</a></li>
                                            <li><a href="../Torre/index.php#Accesorios">Accesorios para torres</a></li>
                                            <li><a href="../../../control/">Instalacion de torre arriostrada</a></li>
                                            <li><a href="../../../control/SistemaTierra.php">Sistemas de puesta a tierra</a></li>
                                            <li><a href="../../../control/pararrayos.php">Sistema de pararrayos y baliza </a></li>
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
                                    <li><a href="../../../industrias.php#telecom">Telecomunicaciones</a></li>
                                    <li><a href="../../../industrias.php#Electrico">Electricidad</a></li>
                                    <li><a href="../../../industrias.php#Mobiliario">Mobiliario Urbano</a></li>
                                    <li><a href="../../../industrias.php#Exhibicion">Exhibición y Almacenaje </a></li>
                                </ul>
                            </li>

                            <li id="nav2">
                                <a href="../../../maquinaria.php" id="servicios-link" class="TituloMenu">Maquinaria</a>
                            </li>

                            <li>
                                <a href="../../../public/Nosotros/" id="nosotros-link" class="TituloMenu">Nosotros</a>

                            </li>
                            <li><a href="../../../contacto.php" class="TituloMenu">Contacto</a></li>
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

            <div class="containerDetalles">
                <div class="product">
                    <div class="thumbnails">
                        <img src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($producto['imagen_principal']); ?>" alt="Imagen Principal" onclick="changeImage(this)" class="active">
                        <?php while ($imagen = mysqli_fetch_assoc($result_imagenes)): ?>
                            <img src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($imagen['imagen_url']); ?>" alt="Imagen secundaria" onclick="changeImage(this)">
                        <?php endwhile; ?>
                    </div>
                    <div class="main-image">
                        <img id="selectedImage" src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($producto['imagen_principal']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                    </div>
                    <div class="details">
                        <h2><?php echo htmlspecialchars($producto['nombre']); ?></h2>
                        <p><?php echo nl2br(htmlspecialchars($producto['descripcion'])); ?></p>
                        <?php if (!empty($producto['ficha_tecnica'])): ?>
                            <a href="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($producto['ficha_tecnica']); ?>" class="btn" target="_blank">
                                Ver ficha
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="tables-container">
                    <div class="tables-wrapper">
                        <?php if (mysqli_num_rows($result_caracteristicas) > 0): ?>
                            <section class="specifications">
                                <h2 class="tituloEs">CARACTERÍSTICAS</h2>
                                <table>
                                    <?php while ($caracteristica = mysqli_fetch_assoc($result_caracteristicas)): ?>
                                        <tr>
                                            <th><?php echo htmlspecialchars($caracteristica['titulo']); ?></th>
                                            <td><?php echo htmlspecialchars($caracteristica['descripcion']); ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </table>
                            </section>
                        <?php endif; ?>

                        <?php if (mysqli_num_rows($result_especificaciones) > 0): ?>
                            <section class="specifications">
                                <h2 class="tituloEs">ESPECIFICACIONES TÉCNICAS</h2>
                                <table>
                                    <?php while ($especificacion = mysqli_fetch_assoc($result_especificaciones)): ?>
                                        <tr>
                                            <th><?php echo htmlspecialchars($especificacion['titulo']); ?></th>
                                            <td><?php echo htmlspecialchars($especificacion['descripcion']); ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </table>
                            </section>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="button-container">
                    <a href="javascript:history.back()" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                </div>
            </div>

            <script>
                function changeImage(element) {
                    document.getElementById('selectedImage').src = element.src;
                    document.querySelectorAll('.thumbnails img').forEach(img => img.classList.remove('active'));
                    element.classList.add('active');
                }
            </script>
        </body>

        </html>
<?php
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "<h1>Producto no encontrado</h1><p>El producto que estás buscando no existe.</p><a href='javascript:history.back()'>Regresar</a>";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>