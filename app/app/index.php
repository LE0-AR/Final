<?php
include "./config/conexion.php";
require_once "config/app.php";
include_once "public/autoload/head.php";
include_once "config/sesion_Ini.php";

// Validar rol y redirigir
if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'User') {
    header("Location: Views/user/");
    exit();
}

// Consultas para productos activos e inactivos
$sql_productos_activos = "SELECT COUNT(*) AS total FROM productos WHERE estado = 'Activo'";
$result_productos_activos = $connect->query($sql_productos_activos);
$total_productos_activos = ($result_productos_activos->num_rows > 0) ? $result_productos_activos->fetch_assoc()['total'] : 0;

$sql_productos_inactivos = "SELECT COUNT(*) AS total FROM productos WHERE estado = 'Inactivo'";
$result_productos_inactivos = $connect->query($sql_productos_inactivos);
$total_productos_inactivos = ($result_productos_inactivos->num_rows > 0) ? $result_productos_inactivos->fetch_assoc()['total'] : 0;

$sql_productos_total = "SELECT COUNT(*) AS total FROM productos";
$result_productos_total = $connect->query($sql_productos_total);
$total_productos = ($result_productos_total->num_rows > 0) ? $result_productos_total->fetch_assoc()['total'] : 0;

// Consulta para usuarios por rol (excluyendo ID 1)
$sql_usuarios = "SELECT rol, COUNT(*) as total FROM usuario WHERE id > 2 GROUP BY rol";
$result_usuarios = $connect->query($sql_usuarios);
$usuarios_por_rol = [];
$total_usuarios = 0;

while ($row = $result_usuarios->fetch_assoc()) {
    $usuarios_por_rol[$row['rol']] = $row['total'];
    $total_usuarios += $row['total'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/9f5db648e8.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once "public/autoload/header.php"; ?>
    <div class="containerHome">
        <h1>Panel de Administración</h1>

        <!-- Cards con estadísticas -->
        <div class="dashboard">
            <div class="card" onclick="location.href='./Views/formulario.php'">
                <i class="fas fa-box icon"></i>
                <p class="title">PRODUCTOS</p>
                <div class="stats">
                    <p>Activos: <?php echo $total_productos_activos; ?></p>
                    <p>Inactivos: <?php echo $total_productos_inactivos; ?></p>
                    <p>Total: <?php echo $total_productos_activos + $total_productos_inactivos; ?></p>
                </div>
            </div>
            <div class="card" onclick="location.href='./Views/usuario.php'">
                <i class="fas fa-users icon"></i>
                <p class="title">USUARIOS</p>
                <div class="stats">
                    <p>Total: <?php echo $total_usuarios; ?></p>
                </div>
            </div>
        </div>

        <!-- Sección de gráficos -->
        <div class="charts-container">
            <div class="chart-card">
                <h3>Distribución de Productos</h3>
                <div class="chart-wrapper">
                    <canvas id="productosChart"></canvas>
                </div>
            </div>
            <div class="chart-card">
                <h3>Distribución de Usuarios</h3>
                <div class="chart-wrapper">
                    <canvas id="usuariosChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Configuración de gráficos
        const configProductos = {
            type: 'doughnut',
            data: {
                labels: ['Activos', 'Inactivos'],
                datasets: [{
                    data: [
                        <?php echo $total_productos_activos; ?>,
                        <?php echo $total_productos - $total_productos_activos; ?>
                    ],
                    backgroundColor: ['#28a745', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        };

        const configUsuarios = {
            type: 'doughnut',
            data: {
                labels: ['Administradores', 'Usuarios'],
                datasets: [{
                    data: [
                        <?php echo isset($usuarios_por_rol['Admin']) ? $usuarios_por_rol['Admin'] : 0; ?>,
                        <?php echo isset($usuarios_por_rol['User']) ? $usuarios_por_rol['User'] : 0; ?>
                    ],
                    backgroundColor: ['#007bff', '#17a2b8']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        };

        // Inicialización de gráficos
        window.onload = function() {
            new Chart(document.getElementById('productosChart'), configProductos);
            new Chart(document.getElementById('usuariosChart'), configUsuarios);
        };
    </script>
    <style>
        /* Estilos para cards y gráficas */
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 15px;
            margin-bottom: 30px;
        }

        .charts-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 15px;
        }

        .chart-card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chart-wrapper {
            position: relative;
            height: 0;
            padding-bottom: 75%;
            /* Ratio aspecto 4:3 */
        }

        .chart-wrapper canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }

        /* Media queries para mejor responsividad */
        @media (max-width: 768px) {

            .dashboard,
            .charts-container {
                grid-template-columns: 1fr;
            }

            .chart-wrapper {
                padding-bottom: 100%;
                /* Ratio aspecto 1:1 en móviles */
            }

            .card,
            .chart-card {
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .stats p {
                font-size: 14px;
            }

            h3 {
                font-size: 18px;
            }
        }
    </style>