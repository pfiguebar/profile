let terminalText;

window.onload = function () {
  var terminalText = document.getElementById("tt");
  var modal = document.getElementById("terminal-modal");
  var closeModal = document.querySelector(".close-modal");
  var modalMessage = document.getElementById("modal-message");

  // Close modal when clicking the X
  closeModal.onclick = function() {
    modal.classList.remove("show");
  }

  // Close modal when clicking outside
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.classList.remove("show");
    }
  }

  // Keydown event listener
  document.addEventListener("keydown", function (event) {
  
  // Verificamos primero si es una tecla especial que queremos ignorar
  const shouldIgnoreKey = 
  event.altKey || 
  event.ctrlKey || 
  event.metaKey || 
  event.shiftKey || 
  ["CapsLock", "Tab", "Escape"].includes(event.key);

  if (shouldIgnoreKey) {
    return; // Salimos si es una tecla especial
  }

  switch (event.key) {
    case "Enter":
      event.preventDefault();
      const command = terminalText.textContent.replace("pefiguer@infodto:~$", "").trim();
      handleCommand(command);
      break;
  
    case "Backspace":
    // Eliminar el último carácter
    const previousTypeIndicators = document.querySelectorAll(".type-indicator");
    previousTypeIndicators.forEach(indicator => indicator.remove());
    terminalText.innerHTML = terminalText.innerHTML.slice(0, -1);
    restoreIndicator();
    break;
  
    default:
    // Cualquier otra tecla se añade al texto
    terminalText.innerHTML += event.key;
    restoreIndicator();
    break;
  }
  });

  function handleCommand(command) {
    let message = "";
    
    // Add your command handling logic here
    switch(command.toLowerCase()) {
      case "help":
        message = "Available commands:<br>- about: Learn more about me<br>- skills: See my technical skills<br>- contact: How to reach me";
        break;
      case "about":
        message = "Hi! I'm Pedro Figueroa, a passionate web developer focused on creating modern and efficient web applications.";
        break;
      case "skills":
        message = "My technical skills include:<br>- Frontend: HTML, CSS, JavaScript<br>- Backend: PHP, Node.js<br>- Database: MySQL, MongoDB<br>- Tools: Git, Docker";
        break;
      case "contact":
        message = "You can reach me through:<br>- LinkedIn: /in/pedro-figueroa-barceló<br>- GitHub: @pfiguebar<br>- Or use the contact form below!";
        break;
      default:
        message = `Command not found: ${command}<br>Type 'help' to see available commands.`;
    }

    // Show modal with message
    modalMessage.innerHTML = message;
    modal.classList.add("show");
    
    // Reset terminal prompt
    terminalText.innerHTML = "pefiguer@infodto:~$&nbsp;<span class='type-indicator'>&nbsp;▌</span>";
  }
};

function restoreIndicator() {
  // Remove any previous instances of type-indicator
  var previousTypeIndicators = document.querySelectorAll(".type-indicator");
  previousTypeIndicators.forEach(function (indicator) {
    indicator.remove();
  });
  // Add a new type-indicator at the end
  terminalText.insertAdjacentHTML(
    "beforeend",
    "<span class='type-indicator'>&nbsp;▌</span>"
  );
}
