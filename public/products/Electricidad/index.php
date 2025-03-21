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

// Depuración de las consultas
if (!$resultSecciones) {
	die("Error en consulta Secciones: " . mysqli_error($connect));
}
if (!$resultAccesorios) {
	die("Error en consulta Accesorios: " . mysqli_error($connect));
}

$base_url = "http://localhost/transformetal/app/app/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TRANSFORMETAL</title>
	<link rel="icon" type="image/png" href="../../../assets/img/isotipo.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/Gabitenes.css">
</head>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		function showSection(sectionId) {
			const sections = document.querySelectorAll('.product-list');
			sections.forEach(section => {
				if (section.id === sectionId) {
					section.classList.add('active-section');
					section.style.opacity = '1';
					section.style.transform = 'translateY(0)';
				} else {
					section.classList.remove('active-section');
					section.style.opacity = '0';
					section.style.transform = 'translateY(20px)';
				}
			});

			// Actualizar título y breadcrumb
			const title = document.querySelector('.title-Product');
			const breadcrumb = document.querySelector('#breadcrumb .active');

			if (title && breadcrumb) {
				if (sectionId === 'Accesorios') {
					title.textContent = 'Accesorios Eléctricos';
					breadcrumb.textContent = 'Accesorios';
				} else {
					title.textContent = 'Productos Eléctricos';
					breadcrumb.textContent = 'Secciones';
				}
			}
		}

		// Mostrar sección inicial basada en el hash
		const hash = window.location.hash.slice(1) || 'Secciones';
		showSection(hash);

		// Escuchar cambios en el hash
		window.addEventListener('hashchange', () => {
			const newHash = window.location.hash.slice(1) || 'Secciones';
			showSection(newHash);
		});
	});
</script>
<style>
	.product-list {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 20px;
		margin-top: 40px;
		opacity: 1;
		/* Cambiado de 0 a 1 para que sea visible */
		transform: translateY(0);
		/* Eliminada la transformación inicial */
		transition: opacity 0.8s ease-out, transform 0.8s ease-out;
	}

	/* Eliminar display:none del estilo inline */
	#Secciones,
	#Accesorios {
		display: grid !important;
	}

	.active-section {
		display: grid !important;
		opacity: 1;
		transform: translateY(0);
	}
</style>
<body>
	<div class="section">

		<nav class="breadcrumb" id="breadcrumb">
			<a href="">Torre ></a>
			<a href="#">Torres Arriostradas ></a>
			<span class="active">Torre</span>
		</nav>

		<section class="product-header">
			<h1 class="title-Product">Torres Arriostradas </h1>
			<p class="description">
				Descubre nuestra amplia gama de torres ariostradas en Transformetal, diseñadas para cumplir con sus necesidades en
				infraestructura de comunicaciones inalámbricas. Con una construcción sólida y estabilizada combinable, nuestras torres
				ofrecen resistencia y durabilidad excepcionales, incluso en condiciones climáticas adversas.

			</p>
			<?php
			// Agregar justo antes de las secciones de productos
			var_dump([
				'num_secciones' => mysqli_num_rows($resultSecciones),
				'num_accesorios' => mysqli_num_rows($resultAccesorios)
			]);
			?>
		</section>

		<section id="Secciones" class="product-list">
			
        <?php
        if (mysqli_num_rows($resultSecciones) > 0) {
            while ($row = mysqli_fetch_assoc($resultSecciones)) {
                $nombre_limpio = str_replace([' ', '.', '/', '\\'], '-', strtolower($row['nombre']));
                $hash = md5($row['id'] . 'transformetal');
                $slug = $nombre_limpio . '-' . $hash;
                $imagen_url = $base_url . 'Control/' . $row['imagen_principal'];
                $producto_url = "detalle.php?producto=" . urlencode($slug);
        ?>
                <div class="product-card">
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
        } else {
            echo "<div class='no-products'>No hay secciones disponibles</div>";
        }
        ?>
    </section>


		<section id="Accesorios" class="product-list">
			<?php
			if (mysqli_num_rows($resultAccesorios) > 0) {
				while ($row = mysqli_fetch_assoc($resultAccesorios)) {
					$nombre_limpio = str_replace([' ', '.', '/', '\\'], '-', strtolower($row['nombre']));
					$hash = md5($row['id'] . 'transformetal');
					$slug = $nombre_limpio . '-' . $hash;
					$imagen_url = $base_url . 'Control/' . $row['imagen_principal'];
					$producto_url = "detalle.php?producto=" . urlencode($slug);
			?>
					<div class="product-card">
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
			} else {
				echo "<div class='no-products'>No hay accesorios disponibles</div>";
			}
			?>
		</section>

	</div>

</body>

</html>