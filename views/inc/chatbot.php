<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? '';
    $email = $_POST["email"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $mensaje = $_POST["user-input"] ?? '';

    $destinatario = "ismaelaspuacr.5@gmail.com";
    $asunto = "Nuevo mensaje de $email";

    $contenido = "Nombre: $nombre \n";
    $contenido .= "Email: $email \n";
    $contenido .= "Teléfono: $telefono \n";
    $contenido .= "Mensaje: $mensaje";

    $header = "From: no-reply@transformetalgt.com\r\n";
    $header .= "Reply-To: $email\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();

    if (mail($destinatario, $asunto, $contenido, $header)) {
        http_response_code(200);
        echo "Correo enviado exitosamente.";
    } else {
        http_response_code(500);
        echo "Error al enviar el correo.";
    }
}
?>

		<!--chatbot Inicio-->
		<!--chatbot de whatsapp-->
		<div class="message-wrapper">
			<div class="message-toggle">
				<a href="https://api.whatsapp.com/send/?phone=50237673973&type=phone_number&app_absent=0" target="_blank">
					<i class="fa-brands fa-whatsapp"></i>
				</a>

			</div>
		</div>
		<!--whatsapp Fin-->

		<!--Chat Incio-->
		<!-- Chat bot UI start -->
		<div class="chat-screen">
			<div class="chat-header">
				<div class="chat-header-title">Asistente Transformetal</div>
			</div>
			<!-- Prueba de chatbot pedido de datos inicio -->
			<form id="chat-form" method="POST">
				<div class="chat-mail">
					<div class="row">
						<div class="chat-description">
							<p style="font-size: 14px; top:-50px;">
								Bienvenido/a. Estamos aquí para atenderle de la mejor manera posible.
								Por favor, proporcione la siguiente información para comenzar.
							</p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input
									style="width: 280px;  height:30px;"
									required
									type="text"
									class="form-control input-nombre"
									placeholder="Ingrese su nombre..."
									name="nombre" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input
									style="width: 280px;  height:30px;"
									required
									type="email"
									class="form-control input-email"
									placeholder="Ingrese su correo electronico..."
									name="email" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input
									style="width: 280px;  height:30px;"
									required
									type="number"
									class="form-control input-telefono"
									placeholder="Ingrese su numero telefonico..."
									name="telefono" />
							</div>
						</div>
						<div class="col-md-12 btn">
							<center>
								<button
									type="submit"
									class="btn btn-primary btn-form">
									Iniciar
								</button>
							</center>
						</div>
					</div>


				</div>

				<!-- Este es el nuevo div que se activará con un botón -->
				<div id="activate-chat-body" class="chat-body hide" style="display: none;">
					<!-- Aquí irán los mensajes del chat -->
				</div>
				<div class="chat-input hide" style="display: none;">
					<input
						type="text"
						placeholder="Escriba su mensaje..."
						id="user-input"
						name="user-input" />
					<div class="input-action-icon">
						<a id="send-message">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								width="24"
								height="24"
								viewBox="0 0 24 24"
								fill="none"
								stroke="currentColor"
								stroke-width="2"
								stroke-linecap="round"
								stroke-linejoin="round"
								class="feather feather-send"
								id="enviar">
								<line x1="22" y1="2" x2="11" y2="13"></line>
								<polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
							</svg>
						</a>
					</div>

				</div>
			</form>
		</div>
		<div class="chat-bot-icon">
			<svg
				xmlns="http://www.w3.org/2000/svg"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				stroke-linecap="round"
				stroke-linejoin="round"
				class="feather feather-message-square animate">
				<path
					d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
			</svg>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				stroke-linecap="round"
				stroke-linejoin="round"
				class="feather feather-x">
				<line x1="18" y1="6" x2="6" y2="18"></line>
				<line x1="6" y1="6" x2="18" y2="18"></line>
			</svg>
		</div>
		<!-- Chat Bot UI Ends -->
		<!--Chat FIn-->

		<!--Chatbot Fin-->