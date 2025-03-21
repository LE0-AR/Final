$(document).ready(function () {
  // Toggle fullscreen chat al hacer clic en el ícono del chat
  $(".chat-bot-icon").click(function () {
    $(this).children("svg").toggleClass("animate");
    $(".chat-screen").toggleClass("show-chat");
  });

  // Envío del formulario
  $("#chat-form").submit(function (e) {
    e.preventDefault(); // Evita que el formulario se envíe

    // Ocultar la sección de formulario
    $(".chat-mail").addClass("hide").hide();

    // Mostrar el cuerpo del chat y la entrada de mensajes
    $("#activate-chat-body").removeClass("hide").show();
    $(".chat-input").removeClass("hide").show();

    // Mensaje de bienvenida
    $("#activate-chat-body").append(
      '<div class="chat-bubble you">En este momento, los operadores no están disponibles. Por favor, deje un mensaje.</div>'
    );
  });

  // Enviar mensaje
  $("#send-message").click(function () {
    var userInput = $("#user-input").val().trim();

    if (userInput !== "") {
      // Agregar el mensaje del usuario al chat
      $("#activate-chat-body").append(
        '<div class="chat-bubble me">' + userInput + "</div>"
      );

      // Limpiar el input
      $("#user-input").val("");

      // Respuesta automática después de 1 segundo
      setTimeout(function () {
        $("#activate-chat-body").append(
          '<div class="chat-bubble you">Gracias por su mensaje nos comunicaremos con usted a la brevedad.</div>'
        );

        // Desplazar hacia abajo para mostrar el nuevo mensaje
        $("#activate-chat-body").scrollTop($("#activate-chat-body")[0].scrollHeight);
      }, 1000);
    }
  });
});

