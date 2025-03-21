document.addEventListener("DOMContentLoaded", function () {
    const chatForm = document.getElementById("chat-form");
    const chatBody = document.querySelector(".chat-body");
    const chatInput = document.querySelector(".chat-input");
    const userInput = document.getElementById("user-input");
    const sendMessageBtn = document.getElementById("send-message");

    let chatHistory = [];
    let userData = null;

    // Function to render chat messages
    function renderMessages() {
      chatBody.innerHTML = "";
      chatHistory.forEach((msg) => {
        const msgDiv = document.createElement("div");
        msgDiv.classList.add(
          "chat-bubble",
          msg.sender === "user" ? "me" : "bot"
        );
        msgDiv.innerHTML = msg.text;
        chatBody.appendChild(msgDiv);
      });
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    // Initialize chat if user data exists
    if (userData) {
      document.querySelector(".chat-mail").classList.add("hide");
      chatBody.classList.remove("hide");
      chatInput.classList.remove("hide");
      renderMessages();
    }

    // Handle form submission to start chat
    chatForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const formData = new FormData(chatForm);
      userData = {
        nombre: formData.get("nombre"),
        email: formData.get("email"),
        telefono: formData.get("telefono"),
        message: formData.get("message"),
      };

      document.querySelector(".chat-mail").classList.add("hide");
      chatBody.classList.remove("hide");
      chatInput.classList.remove("hide");

      // Show welcome message
      chatHistory.push({ sender: "bot", text: "¡Bienvenido al chat!" });
      renderMessages();
    });

    // Handle sending messages
    sendMessageBtn.addEventListener("click", function () {
      const message = userInput.value.trim();
      if (message === "") return;

      // Save user's message
      chatHistory.push({ sender: "user", text: message });
      renderMessages();
      userInput.value = "";

      // Send email with user's first message if not already sent
      if (!userData.messageSent) {
        axios
          .post("/send-email", {
            ...userData,
            message: message,
          })
          .then((response) => {
            console.log("Correo enviado correctamente.");
          })
          .catch((error) => {
            console.error("Error al enviar el correo:", error);
          });

        userData.messageSent = true;
      }

      // Simulate bot response
      setTimeout(() => {
        const botResponse =
          '<div class="chat-bubble you">Gracias por tu mensaje. Te responderemos pronto.</div>';
        chatHistory.push({ sender: "bot", text: botResponse });
        renderMessages();
      }, 1000);
    });
  });