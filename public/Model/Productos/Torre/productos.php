<?php
// Definición de un array asociativo que contiene información sobre productos
$productos = [
    [
        "id" => 1, // Identificador único del producto
        "nombre" => "Gabinete NEMA Outdoor de Pared - 0.76M", // Nombre del producto
        "imagen_principal" => "assets/img/product/gabinete/nema3-1.png", // Ruta de la imagen principal
        "detalle" => "detalles.php?id=1", // Enlace a la página de detalles del producto
        "sector" => "Telcos", // Sector a la que pertence el producto
        "categoria" => "indoor", // Categoria a ala que pertecence dicho productos
        "imagenes_secundarias" => [ // Array con imágenes adicionales del producto
            "assets/img/product/gabinete/nema3-2.png",
            "assets/img/product/gabinete/nema3-3.png",
            "assets/img/product/gabinete/nema3-4.png"
        ],
        "descripcion" => "Gabinete de acero para exteriores diseñado para proteger equipos electrónicos...", // Descripción breve del producto
        "ficha_tecnica" => "https://drive.google.com/file/d/1ZdeyI_Br2ryho8IrDmPqzdkb3m5rJPBv/view?usp=sharing", // Enlace a la ficha técnica
        "especificaciones" => [ // Array con especificaciones técnicas del producto
            "Material de construcción" => "Lámina rolada en frío #18",
            "Tipo de enfriamiento" => "Ventilación con filtro + 4 Ventiladores 12X12 cm",
            "Voltaje ajustable" => "120-240 VAC",
            "Dimensiones" => "W 600mm, D 526mm, H 650mm",
            "Peso" => "75 Lbs",
            "Tipo de pintura" => "Poliéster Electrostática",
            "Iluminación" => "LED 5W, 120-240 VAC"
        ],
        "caracteristicas" => [ // Array con características destacadas del producto
            "Sistema de enfriamiento" => "Reduce la temperatura en 3°C con ventiladores.",
            "Acabado exterior" => "Resistente con pintura de poliéster electrostática.",
            "Seguridad" => "Cerraduras tipo locker para mayor seguridad.",
            "Montaje y manejo" => "Incluye orejas para montaje fácil y seguro.",
            "Iluminación y energía" => "Iluminación LED frontal ajustable en voltaje."
        ]
    ],
    [
        "id" => 2, // Identificador único del segundo producto
        "nombre" => "2Gabinete NEMA Outdoor de Pared - 0.76M", // Nombre del producto
        "imagen_principal" => "assets/img/product/gabinete/nema3-1.png", // Ruta de la imagen principal
        "detalle" => "detalles.php?id=2", // Enlace a la página de detalles del producto
        "sector" => "Telcos", // Sector a la que pertence el producto
        "categoria" => "outdoor", // Categoria a ala que pertecence dicho productos
        "imagenes_secundarias" => [ // Array con imágenes adicionales del producto
            "assets/img/product/gabinete/nema3-2.png",
            "assets/img/product/gabinete/nema3-3.png",
            "assets/img/product/gabinete/nema3-4.png"
        ],
        "descripcion" => "Gabinete de acero para exteriores diseñado para proteger equipos electrónicos...", // Descripción breve del producto
        "ficha_tecnica" => "https://drive.google.com/file/d/1ZdeyI_Br2ryho8IrDmPqzdkb3m5rJPBv/view?usp=sharing", // Enlace a la ficha técnica
        "especificaciones" => [ // Array con especificaciones técnicas del producto
            "Material de construcción" => "Lámina rolada en frío #18",
            "Tipo de enfriamiento" => "Ventilación con filtro + 4 Ventiladores 12X12 cm",
            "Voltaje ajustable" => "120-240 VAC",
            "Dimensiones" => "W 600mm, D 526mm, H 650mm",
            "Peso" => "75 Lbs",
            "Tipo de pintura" => "Poliéster Electrostática",
            "Iluminación" => "LED 5W, 120-240 VAC"
        ],
        "caracteristicas" => [ // Array con características destacadas del producto
            "Sistema de enfriamiento" => "Reduce la temperatura en 3°C con ventiladores.",
            "Acabado exterior" => "Resistente con pintura de poliéster electrostática.",
            "Seguridad" => "Cerraduras tipo locker para mayor seguridad.",
            "Montaje y manejo" => "Incluye orejas para montaje fácil y seguro.",
            "Iluminación y energía" => "Iluminación LED frontal ajustable en voltaje."
        ]
    ],
    // Se pueden agregar más productos dentro del array si es necesario
];

// Obtener parámetros de la URL
$sector = isset($_GET["sector"]) ? $_GET["sector"] : null;
$categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : null;

// Filtrar productos si hay parámetros
if ($sector || $categoria) {
    $productos = array_filter($productos, function ($producto) use ($sector, $categoria) {
        return (!$sector || $producto["sector"] === $sector) &&
               (!$categoria || $producto["categoria"] === $categoria);
    });
}

// Convertir a JSON
header('Content-Type: application/json');
echo json_encode(array_values($productos));
exit;
?>
