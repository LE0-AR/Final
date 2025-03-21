<?php
include '../../../model/autolad/conexcion.php';

if (isset($_GET['id'])) {
    $hash = mysqli_real_escape_string($connect, $_GET['id']);
    
    // Consulta principal con JOIN para obtener todos los datos
    $sql = "SELECT p.*, 
            c.titulo as caracteristica_titulo, 
            c.descripcion as caracteristica_descripcion,
            e.titulo as especificacion_titulo, 
            e.descripcion as especificacion_descripcion,
            i.imagen_url as imagen_secundaria
            FROM productos p
            LEFT JOIN caracteristicas c ON p.id = c.producto_id
            LEFT JOIN especificaciones_tecnicas e ON p.id = e.producto_id
            LEFT JOIN imagenes_secundarias i ON p.id = i.producto_id
            WHERE MD5(CONCAT(p.id, 'transformetal')) = ?";
    
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "s", $hash);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $producto = mysqli_fetch_assoc($result);
        
        // Arrays para almacenar características, especificaciones e imágenes
        $caracteristicas = [];
        $especificaciones = [];
        $imagenes = [];
        
        // Primera fila ya está en $producto, procesar el resto
        do {
            if (!empty($row['caracteristica_titulo'])) {
                $caracteristicas[] = [
                    'titulo' => $row['caracteristica_titulo'],
                    'descripcion' => $row['caracteristica_descripcion']
                ];
            }
            if (!empty($row['especificacion_titulo'])) {
                $especificaciones[] = [
                    'titulo' => $row['especificacion_titulo'],
                    'descripcion' => $row['especificacion_descripcion']
                ];
            }
            if (!empty($row['imagen_secundaria'])) {
                $imagenes[] = $row['imagen_secundaria'];
            }
        } while ($row = mysqli_fetch_assoc($result));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($producto['nombre']); ?> - TRANSFORMETAL</title>
    <link rel="stylesheet" href="../../css/Gabitenes.css">
</head>
<body>
    <div class="containerDetalles">
        <div class="product">
            <div class="thumbnails">
                <!-- Imagen principal -->
                <img src="<?php echo APP_URL; ?>/app/Control/<?php echo htmlspecialchars($producto['imagen_principal']); ?>" 
                     alt="Imagen Principal" onclick="changeImage(this)">
                
                <!-- Imágenes secundarias -->
                <?php foreach ($imagenes as $imagen): ?>
                    <img src="<?php echo APP_URL; ?>/app/Control/<?php echo htmlspecialchars($imagen); ?>" 
                         alt="Imagen secundaria" onclick="changeImage(this)">
                <?php endforeach; ?>
            </div>
            
            <div class="main-image">
                <img id="selectedImage" 
                     src="<?php echo APP_URL; ?>/app/Control/<?php echo htmlspecialchars($producto['imagen_principal']); ?>" 
                     alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
            </div>
            
            <div class="details">
                <h2><?php echo htmlspecialchars($producto['nombre']); ?></h2>
                <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                <?php if (!empty($producto['ficha_tecnica'])): ?>
                    <a href="<?php echo APP_URL; ?>/app/Control/<?php echo htmlspecialchars($producto['ficha_tecnica']); ?>" 
                       class="btn" target="_blank">Ver ficha técnica</a>
                <?php endif; ?>
            </div>
        </div>

        <div class="tables-container">
            <!-- Características -->
            <?php if (!empty($caracteristicas)): ?>
                <section class="specifications">
                    <h2 class="tituloEs">CARACTERÍSTICAS</h2>
                    <div class="specs-container">
                        <div class="specs-box">
                            <table>
                                <?php foreach ($caracteristicas as $caracteristica): ?>
                                    <tr>
                                        <th><?php echo htmlspecialchars($caracteristica['titulo']); ?></th>
                                        <td><?php echo htmlspecialchars($caracteristica['descripcion']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <!-- Especificaciones Técnicas -->
            <?php if (!empty($especificaciones)): ?>
                <section class="specifications">
                    <h2 class="tituloEs">ESPECIFICACIONES TÉCNICAS</h2>
                    <div class="specs-container">
                        <div class="specs-box">
                            <table>
                                <?php foreach ($especificaciones as $especificacion): ?>
                                    <tr>
                                        <th><?php echo htmlspecialchars($especificacion['titulo']); ?></th>
                                        <td><?php echo htmlspecialchars($especificacion['descripcion']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
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
            document.querySelectorAll('.thumbnails img').forEach(img => img.classList.remove('active'));
            element.classList.add('active');
        }
    </script>
</body>
</html>
<?php
    } else {
        header("HTTP/1.0 404 Not Found");
        exit("Producto no encontrado");
    }
} else {
    header("Location: index.php");
    exit();
}
?>