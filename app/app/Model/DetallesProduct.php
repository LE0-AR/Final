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
            <link rel="stylesheet" href="../../css/Detalles.css">
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
        </head>

        <body>
            <div class="containerDetalles">
                <div class="product">
                    <div class="thumbnails">
                        <!-- Imagen principal -->
                        <img src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($producto['imagen_principal']); ?>"
                            alt="Imagen Principal"
                            onclick="changeImage(this)"
                            class="active">

                        <!-- Imágenes secundarias -->
                        <?php while ($imagen = mysqli_fetch_assoc($result_imagenes)): ?>
                            <img src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($imagen['imagen_url']); ?>"
                                alt="Imagen secundaria"
                                onclick="changeImage(this)">
                        <?php endwhile; ?>
                    </div>

                    <div class="main-image">
                        <img id="selectedImage"
                            src="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($producto['imagen_principal']); ?>"
                            alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                    </div>

                    <div class="details">
                        <h2><?php echo htmlspecialchars($producto['nombre']); ?></h2>
                        <p><?php echo nl2br(htmlspecialchars($producto['descripcion'])); ?></p>
                        <?php if (!empty($producto['ficha_tecnica'])): ?>
                            <a href="<?php echo $base_url; ?>Control/<?php echo htmlspecialchars($producto['ficha_tecnica']); ?>"
                                class="btn"
                                target="_blank">
                                <i class="fas fa-file-pdf"></i> Ver ficha técnica
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="tables-container">
                    <!-- Características -->
                    <?php if (mysqli_num_rows($result_caracteristicas) > 0): ?>
                        <section class="specifications">
                            <h2 class="tituloEs">CARACTERÍSTICAS</h2>
                            <div class="specs-container">
                                <div class="specs-box">
                                    <table>
                                        <?php while ($caracteristica = mysqli_fetch_assoc($result_caracteristicas)): ?>
                                            <tr>
                                                <th><?php echo htmlspecialchars($caracteristica['titulo']); ?></th>
                                                <td><?php echo htmlspecialchars($caracteristica['descripcion']); ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>

                    <!-- Especificaciones Técnicas -->
                    <?php if (mysqli_num_rows($result_especificaciones) > 0): ?>
                        <section class="specifications">
                            <h2 class="tituloEs">ESPECIFICACIONES TÉCNICAS</h2>
                            <div class="specs-container">
                                <div class="specs-box">
                                    <table>
                                        <?php while ($especificacion = mysqli_fetch_assoc($result_especificaciones)): ?>
                                            <tr>
                                                <th><?php echo htmlspecialchars($especificacion['titulo']); ?></th>
                                                <td><?php echo htmlspecialchars($especificacion['descripcion']); ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>
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
                    document.querySelectorAll('.thumbnails img').forEach(img => {
                        img.classList.remove('active');
                    });
                    element.classList.add('active');
                }
            </script>
        </body>

        </html>
<?php
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "<h1>Producto no encontrado</h1>";
        echo "<p>El producto que estás buscando no existe.</p>";
        echo "<a href='javascript:history.back()'>Regresar</a>";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>