<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["user-input"];

    $destinatario = "carlos.yoc@transformetalgt.com";
    $asunto = "Nuevo mensaje de $email";

    $contenido = "Nombre: $nombre \n";
    $contenido .= "Email: $email \n";
    $contenido .= "Teléfono: $telefono \n";
    $contenido .= "Mensaje: $mensaje";

    $header = "Desde la pagina web de Transformetal desde el chatbot";

    if (mail($destinatario, $asunto, $contenido, $header)) {
        http_response_code(200); 
    } else {
        http_response_code(500); 
    }
}
?>
