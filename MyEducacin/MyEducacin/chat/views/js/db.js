// Obtener referencias a los elementos HTML relevantes
const messageInput = document.getElementById("userMessage");
const sendMessageButton = document.getElementById("sendMessage");
const messagesContainer = document.getElementById("messages");

// Obtener los mensajes almacenados del almacenamiento local
let storedMessages = localStorage.getItem("chatMessages");
storedMessages = storedMessages ? JSON.parse(storedMessages) : [];

// Función para mostrar los mensajes almacenados en el contenedor de mensajes
function displayStoredMessages() {
  
}
// Mostrar los mensajes almacenados al cargar la página
displayStoredMessages();

// Agregar evento al botón de enviar mensaje
sendMessageButton.addEventListener("click", () => {
  const newMessage = messageInput.value.trim();
  if (newMessage !== "") {
    // Agregar el nuevo mensaje a la lista de mensajes almacenados
    storedMessages.push(newMessage);

    // Guardar los mensajes actualizados en el almacenamiento local
    localStorage.setItem("chatMessages", JSON.stringify(storedMessages));

    // Mostrar los mensajes almacenados actualizados
    function displayStoredMessages() {
      // Obtener los mensajes almacenados del LocalStorage
      const storedMessages = localStorage.getItem("chatMessages");
      if (storedMessages) {
        // Parsear los mensajes almacenados en formato JSON
        const messages = JSON.parse(storedMessages);
    
        // Limpiar el contenedor de mensajes
        messagesContainer.innerHTML = "";
    
        // Recorrer los mensajes y agregarlos al contenedor
        messages.forEach((message) => {
          const messageElement = document.createElement("div");
          messageElement.textContent = message;
          messagesContainer.appendChild(messageElement);
        });
      }
    }
    


    // Limpiar el campo de entrada de mensajes
    messageInput.value = "";
  }
});
document.getElementById('sendMessage').addEventListener('click', function() {
// Obtener el mensaje ingresado por el usuario
  const message = messageInput.value;

  // Verificar si el mensaje no está vacío
  if (message.trim() !== '') {
    // Obtener los mensajes existentes del LocalStorage (si los hay)
    let messages = localStorage.getItem('chatMessages');
    messages = messages ? JSON.parse(messages) : [];

    // Agregar el nuevo mensaje al arreglo
    messages.push(message);

    // Guardar los mensajes actualizados en el LocalStorage
    localStorage.setItem('chatMessages', JSON.stringify(messages));

    // Limpiar el campo de entrada de mensajes
    messageInput.value = '';
  }

// Obtener el mensaje ingresado por el usuario

  // Verificar si el mensaje no está vacío
  if (message.trim() !== '') {
    // Obtener los mensajes existentes del LocalStorage (si los hay)
    let messages = localStorage.getItem('chatMessages');
    messages = messages ? JSON.parse(messages) : [];

    // Agregar el nuevo mensaje al arreglo
    messages.push(message);

    // Guardar los mensajes actualizados en el LocalStorage
    localStorage.setItem('chatMessages', JSON.stringify(messages));

    // Limpiar el campo de entrada de mensajes
    messageInput.value = '';
  }
});

// Obtener el elemento del botón de registro
var registerButton = document.getElementById("registerUser");


// Agregar un evento de clic al botón
registerButton.addEventListener("click", function () {
  // Obtener el valor del campo de entrada del nombre de usuario
  var usernameInput = document.getElementById("userNickName").value;
  var displayStoredMessages = document.getElementById("messages").value;

  // Verificar si se ingresó un nombre de usuario
  if (usernameInput !== "") {
    // Guardar el nombre de usuario en el LocalStorage
    localStorage.setItem("usuario", usernameInput);

  }
 
    // Guardar el nombre de usuario en el LocalStorage
  if (displayStoredMessages !== "") {
    // Guardar el nombre de usuario en el LocalStorage
    localStorage.setItem("chat", displayStoredMessages);

  }

  
});
