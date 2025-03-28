<?php
// Incluir la conexión a la base de datos
include "../config/conexion.php";

if ($connect->connect_error) {
    die("Conexión fallida: " . $connect->connect_error);
}

// Parámetros de paginación
$registros_por_pagina = 8;
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina_actual - 1) * $registros_por_pagina;

// Búsqueda
$busqueda = isset($_GET['buscar']) ? mysqli_real_escape_string($connect, $_GET['buscar']) : '';
$where = '';
if (!empty($busqueda)) {
    $where = "WHERE nombre LIKE '%$busqueda%' 
              OR sector LIKE '%$busqueda%' 
              OR categoria LIKE '%$busqueda%'
              OR estado LIKE '%$busqueda%'";
}

// Consulta paginada
$sql = "SELECT * FROM productos $where ORDER BY id DESC LIMIT $inicio, $registros_por_pagina";
$result = $connect->query($sql);

// Total de registros para paginación
$sql_total = "SELECT COUNT(*) as total FROM productos $where";
$result_total = $connect->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_registros = $row_total['total'];
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Definir la URL base para las imágenes y archivos
$base_url = "http://localhost/transformetal/app/app/";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .search-container {
            max-width: 500px;
            margin: 20px auto;
        }
        .pagination {
            margin-top: 20px;
        }
        .results-info {
            margin: 20px 0;
            color: #6c757d;
        }
        .img img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="titulo my-4">Lista de Productos</h1>

        <!-- Barra de búsqueda -->
        <div class="search-container">
            <form class="d-flex" method="GET">
                <input type="text" name="buscar" class="form-control me-2" 
                       placeholder="Buscar por nombre, sector, categoría..."
                       value="<?php echo htmlspecialchars($busqueda); ?>">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
                <?php if(!empty($busqueda)): ?>
                    <a href="ProductList.php" class="btn btn-secondary ms-2">
                        <i class="fas fa-times"></i>
                    </a>
                <?php endif; ?>
            </form>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <div class="newProduct">
                <a type="button" class="btn btn-primary" href="../Views/product.php">
                    <i class="fas fa-plus"></i> Nuevo Producto
                </a>
            </div>
            <div class="results-info">
                Mostrando <?php echo $inicio + 1; ?>-<?php echo min($inicio + $registros_por_pagina, $total_registros); ?> 
                de <?php echo $total_registros; ?> productos
            </div>
        </div>

        <!-- Tabla de productos -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">No</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Sector</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Ficha Técnica</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = $inicio + 1;
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <th scope="row"><?php echo $contador++; ?></th>
                            <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($row['estado']); ?></td>
                            <td><?php echo htmlspecialchars($row['sector']); ?></td>
                            <td><?php echo htmlspecialchars($row['categoria']); ?></td>
                            <td class="img">
                                <?php if (!empty($row['imagen_principal'])) { ?>
                                    <img src="<?php echo $base_url . 'Control/' . htmlspecialchars($row['imagen_principal']); ?>" 
                                         alt="Imagen Principal">
                                <?php } else { ?>
                                    <span class="text-muted">Sin imagen</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if (!empty($row['ficha_tecnica'])) { ?>
                                    <a href="<?php echo $base_url . 'Control/' . htmlspecialchars($row['ficha_tecnica']); ?>" 
                                       target="_blank" 
                                       class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-file-pdf"></i> Ver
                                    </a>
                                <?php } else { ?>
                                    <span class="text-muted">Sin ficha</span>
                                <?php } ?>
                            </td>
                            <td>
                                <a class="btn btn-outline-success btn-sm" 
                                   href="../Views/detalles.php?id=<?php echo $row['id']; ?>">
                                    <i class="fas fa-eye"></i> Ver
                                </a>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="../Views/EditarProduct.php?id=<?php echo $row['id']; ?>" 
                                       class="btn btn-outline-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="../Model/DeleteProduct.php?id=<?php echo $row['id']; ?>" 
                                       class="btn btn-outline-danger btn-sm"
                                       onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <?php if ($total_paginas > 1): ?>
        <nav aria-label="Navegación de páginas">
            <ul class="pagination justify-content-center">
                <!-- Anterior -->
                <li class="page-item <?php echo $pagina_actual <= 1 ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1; ?>&buscar=<?php echo urlencode($busqueda); ?>">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
                
                <!-- Números de página -->
                <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                    <li class="page-item <?php echo $pagina_actual == $i ? 'active' : ''; ?>">
                        <a class="page-link" href="?pagina=<?php echo $i; ?>&buscar=<?php echo urlencode($busqueda); ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php endfor; ?>
                
                <!-- Siguiente -->
                <li class="page-item <?php echo $pagina_actual >= $total_paginas ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?pagina=<?php echo $pagina_actual + 1; ?>&buscar=<?php echo urlencode($busqueda); ?>">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>