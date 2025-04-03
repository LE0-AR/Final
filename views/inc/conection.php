<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "transformetal";

// Inicializar conexi贸n MySQLi con opciones
$connect = mysqli_init();
mysqli_options($connect, MYSQLI_OPT_CONNECT_TIMEOUT, 3600); // Tiempo de espera de 60 segundos

// Intentar conectar
if (!mysqli_real_connect($connect, $host, $user, $password, $database)) {
    die("Error de conexinn: " . mysqli_connect_error());
}

echo "<script>console.log('live server');</script>";

// Verificar si la conexi贸n sigue activa antes de ejecutar consultas
if (!mysqli_ping($connect)) {
    die("Error: La conexi贸n con MySQL se ha perdido.");
}

?>
