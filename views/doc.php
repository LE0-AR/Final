<?php
  if (isset($_POST["enviar"])) {
    // Validación y sanitización de los datos recibidos
    $nombre = filter_var(trim($_POST["nombre"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensaje = filter_var(trim($_POST["mensaje"]), FILTER_SANITIZE_STRING);

    // Verificar si el email es válido
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $destinatario = "carlos.yoc@transformetalgt.com"; // Dirección de destino
      $asunto = "Nuevo mensaje de $email"; // Asunto del correo

      // Preparar el contenido del correo
      $contenido = "Nombre: $nombre\n";
      $contenido .= "Email: $email\n";
      $contenido .= "Mensaje: $mensaje";

      // Cabeceras del correo
      $header = "mensaje del apartado de contacto";

      // Enviar el correo
      $mail = mail($destinatario, $asunto, $contenido, $header);

      // Verificar si el correo se envió correctamente
      if ($mail) {
        echo "<script>alert('El correo se envió correctamente :)')</script>";
      } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
      }
    } else {
      // Si el email no es válido
      echo "<script>alert('Por favor ingrese un email válido.')</script>";
    }
  }
?>