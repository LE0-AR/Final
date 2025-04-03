<?php
require_once "../../config/app.php";
require_once "../../config/conexion.php";
include_once "../../public/autoload/head.php";
include_once "../../config/sesion_Ini.php";

// Consultas para estadísticas de productos
$sql_productos_activos = "SELECT COUNT(*) AS total FROM productos WHERE estado = 'Activo'";
$result_productos_activos = $connect->query($sql_productos_activos);
$total_productos_activos = ($result_productos_activos->num_rows > 0) ? $result_productos_activos->fetch_assoc()['total'] : 0;

// Consulta para productos por sector
$sql_por_sector = "SELECT sector, COUNT(*) as total FROM productos WHERE estado = 'Activo' GROUP BY sector";
$result_por_sector = $connect->query($sql_por_sector);

// Consulta para las 6 categorías con más productos
$sql_por_categoria = "
    SELECT categoria, COUNT(*) as total 
    FROM productos 
    WHERE estado = 'Activo' 
    GROUP BY categoria 
    ORDER BY total DESC 
    LIMIT 6";
$result_por_categoria = $connect->query($sql_por_categoria);

// Calcular el total de productos activos para el porcentaje
$total_productos = $total_productos_activos;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/9f5db648e8.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once "../../public/autoload/headeUser.php"; ?>

    <div class="containerHome">
        <h1>Dashboard de Productos</h1>

        <!-- Cards con estadísticas -->
        <div class="dashboard">
            <div class="card" onclick="location.href='ProductUser.php'">
                <i class="fas fa-box icon"></i>
                <p class="title">PRODUCTOS ACTIVOS</p>
                <p class="count"><?php echo $total_productos_activos; ?></p>
            </div>
        </div>

        <!-- Sección de gráficos -->
        <div class="charts-container">
            <div class="chart-card">
                <h3>Productos por Sector</h3>
                <div class="chart-wrapper">
                    <canvas id="sectorChart"></canvas>
                </div>
            </div>
            <div class="chart-card">
                <h3>Productos por Categoría</h3>
                <div class="chart-wrapper">
                    <canvas id="categoriaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Paleta de colores personalizada
        const customColors = [
            '#007bff', 
            '#28a745', 
            '#6c757d', 
            '#ffc107',
            '#dc3545', 
            '#d63384', 
            '#000000' 
        ];

        // Función para generar colores automáticamente
        function generateColors(count) {
            const colors = [];
            for (let i = 0; i < count; i++) {
                colors.push(customColors[i % customColors.length]); // Reutilizar colores si hay más categorías/sectores
            }
            return colors;
        }

        // Datos para la gráfica de sectores
        const sectorLabels = [<?php
                                while ($row = $result_por_sector->fetch_assoc()) {
                                    echo "'" . htmlspecialchars($row['sector']) . "',";
                                }
                                ?>];
        const sectorDataValues = [<?php
                                    mysqli_data_seek($result_por_sector, 0);
                                    while ($row = $result_por_sector->fetch_assoc()) {
                                        echo $row['total'] . ",";
                                    }
                                    ?>];

        // Generar colores dinámicamente para sectores
        const sectorColors = generateColors(sectorLabels.length);

        // Configuración de datos para la gráfica de sectores
        const sectorData = {
            labels: sectorLabels,
            datasets: [{
                data: sectorDataValues,
                backgroundColor: sectorColors,
                borderWidth: 0
            }]
        };

        // Datos para la gráfica de categorías
        const categoriaLabels = [<?php
                                    while ($row = $result_por_categoria->fetch_assoc()) {
                                        echo "'" . htmlspecialchars($row['categoria']) . "',";
                                    }
                                    ?>];
        const categoriaDataValues = [<?php
                                        mysqli_data_seek($result_por_categoria, 0);
                                        while ($row = $result_por_categoria->fetch_assoc()) {
                                            echo $row['total'] . ",";
                                        }
                                        ?>];

        // Generar colores dinámicamente para categorías
        const categoriaColors = generateColors(categoriaLabels.length);

        // Configuración de datos para la gráfica de categorías
        const categoriaData = {
            labels: categoriaLabels,
            datasets: [{
                data: categoriaDataValues,
                backgroundColor: categoriaColors,
                borderWidth: 0
            }]
        };

        // Configuración común para las gráficas
        const chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#333333',
                        font: {
                            size: 12,
                            family: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif"
                        },
                        padding: 15,
                        usePointStyle: true,
                        pointStyle: 'circle'
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            const total = tooltipItem.dataset.data.reduce((acc, value) => acc + value, 0);
                            const value = tooltipItem.raw;
                            const percentage = ((value / total) * 100).toFixed(2);
                            return `${tooltipItem.label}: ${value} (${percentage}%)`;
                        }
                    },
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleFont: {
                        size: 14
                    },
                    bodyFont: {
                        size: 13
                    },
                    padding: 12,
                    cornerRadius: 6,
                    displayColors: true
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true,
                duration: 1000,
                easing: 'easeInOutQuart'
            },
            layout: {
                padding: {
                    top: 10,
                    right: 10,
                    bottom: 10,
                    left: 10
                }
            }
        };

        // Inicialización de las gráficas
        window.onload = function() {
            // Gráfica de sectores
            new Chart(document.getElementById('sectorChart'), {
                type: 'doughnut',
                data: sectorData,
                options: {
                    ...chartOptions,
                    cutout: '60%'
                }
            });

            // Gráfica de categorías
            new Chart(document.getElementById('categoriaChart'), {
                type: 'doughnut',
                data: categoriaData,
                options: {
                    ...chartOptions,
                    cutout: '60%'
                }
            });
        };
    </script>

    <style>
        .containerHome {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 15px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(249, 86, 9, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            border-left: 4px solid #f95609;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(249, 86, 9, 0.2);
        }

        .card .icon {
            color: #f95609;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .card .title {
            color: #333;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card .count {
            color: #f95609;
            font-size: 2rem;
            font-weight: bold;
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
            padding: 20px;
            box-shadow: 0 4px 8px rgba(249, 86, 9, 0.1);
            border-top: 4px solid #f95609;
        }

        .chart-card h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 1.2rem;
            text-align: center;
        }

        .chart-wrapper {
            position: relative;
            height: 0;
            padding-bottom: 75%;
        }

        .chart-wrapper canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }
    </style>
</body>

</html>