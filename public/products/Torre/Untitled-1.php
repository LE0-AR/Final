<?php
include '../../../model/autolad/conexcion.php';

// Consulta para Secciones activas
$querySecciones = "SELECT * FROM productos 
                   WHERE sector='Torres' 
                   AND categoria='SECCIONES' 
                   AND estado='Activo'";
$resultSecciones = mysqli_query($connect, $querySecciones);

// Consulta para Accesorios activos
$queryAccesorios = "SELECT * FROM productos 
                    WHERE sector='Torres' 
                    AND categoria='ACCESORTIOS' 
                    AND estado='Activo'";
$resultAccesorios = mysqli_query($connect, $queryAccesorios);

// Validar si hay resultados
if (!$resultSecciones || !$resultAccesorios) {
    die("Error en la consulta: " . mysqli_error($connect));
}
$base_url = "http://localhost/transformetal/app/app/";
?>
<!-- Copyright 2024  TRANSFORMETAL-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSFORMETAL</title>
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
    <link rel="stylesheet" href="../../css/Gabitenes.css">
</head>
<style>

</style>

<body onload="checkHash()">



    <div class="section-main">


        <section id="Seccion" class="section">

            <nav class="breadcrumb" id="breadcrumb">
                <a href="../../torre/">Torre Arriostrada ></a>
                <span class="active">Torre</span>
            </nav>

            <div class="product-header">
                <h1 class="title-Product">Torres Arriostradas </h1>
                <p class="description">
                    Descubre nuestra amplia gama de torres ariostradas en Transformetal, diseñadas para cumplir con sus necesidades en
                    infraestructura de comunicaciones inalámbricas. Con una construcción sólida y estabilizada combinable, nuestras torres
                    ofrecen resistencia y durabilidad excepcionales, incluso en condiciones climáticas adversas.

                </p>
            </div>
            
            <div class="product-list">
                <?php
                if (mysqli_num_rows($resultSecciones) > 0) {
                    while ($row = mysqli_fetch_assoc($resultSecciones)) {
                        $nombre_limpio = str_replace([' ', '.', '/', '\\'], '-', strtolower($row['nombre']));
                        $hash = md5($row['id'] . 'transformetal');
                        $slug = $nombre_limpio . '-' . $hash;
                        $imagen_url = $base_url . 'Control/' . $row['imagen_principal'];
                        // Modificar la URL para incluir el ID encriptado
                        $producto_url = "detalle.php?id=" . urlencode($hash);
                ?>

                    
                        <div class="product-list" data-id="<?php echo htmlspecialchars($row['id']); ?>">
                            <img src="<?php echo htmlspecialchars($imagen_url); ?>"
                                alt="<?php echo htmlspecialchars($row['nombre']); ?>">
                            <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
                            <div class="center">
                                <a href="<?php echo htmlspecialchars($producto_url); ?>" class="cotizas">
                                    <p>Ver producto</p>
                                </a>
                            </div>
                        </div>

                       
                <?php
                    }
                }
                ?>
          </div>        
        </section>

        <section id="Accesorios" class="section">

            <nav class="breadcrumb" id="breadcrumb">
                <a href="../../torre/">Torre Arriostrada ></a>
                <span class="active">Accesios</span>
            </nav>

            <div class="product-header">
                <h1 class="title-Product">Torres Arriostradas </h1>
                <p class="description">
                    Descubre nuestra amplia gama de torres ariostradas en Transformetal, diseñadas para cumplir con sus necesidades en
                    infraestructura de comunicaciones inalámbricas. Con una construcción sólida y estabilizada combinable, nuestras torres
                    ofrecen resistencia y durabilidad excepcionales, incluso en condiciones climáticas adversas.

                </p>
            </div>
            <section class="product-list">
            <?php
                if (mysqli_num_rows($resultAccesorios) > 0) {
                    while ($row = mysqli_fetch_assoc($resultAccesorios)) {
                        $nombre_limpio = str_replace([' ', '.', '/', '\\'], '-', strtolower($row['nombre']));
                        $hash = md5($row['id'] . 'transformetal');
                        $slug = $nombre_limpio . '-' . $hash;
                        $imagen_url = $base_url . 'Control/' . $row['imagen_principal'];
                        // Modificar la URL para incluir el ID encriptado
                        $producto_url = "detalle.php?id=" . urlencode($hash);
                ?>


                        <div class="product-card" data-id="<?php echo htmlspecialchars($row['id']); ?>">
                            <img src="<?php echo htmlspecialchars($imagen_url); ?>"
                                alt="<?php echo htmlspecialchars($row['nombre']); ?>">
                            <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
                            <div class="center">
                                <a href="<?php echo htmlspecialchars($producto_url); ?>" class="cotizas">
                                    <p>Ver producto</p>
                                </a>
                            </div>
                        </div>


                <?php
                    }
                }
                ?>
            </section>
        </section>
    </div>

    </div>

    <script>
        function showSection(sectionId) {
            var sections = document.getElementsByClassName("section");
            for (var i = 0; i < sections.length; i++) {
                sections[i].style.display = "none";
            }
            var sectionToShow = document.getElementById(sectionId);
            if (sectionToShow) {
                sectionToShow.style.display = "block";
            }
        }

        function checkHash() {
            var hash = window.location.hash;
            if (hash) {
                showSection(hash.substring(1));
            } else {
                showSection("section1");
            }
        }

        window.onhashchange = function() {
            checkHash();
        };

        document.addEventListener('DOMContentLoaded', function() {
            checkHash();
        });
    </script>
</body>

</html>