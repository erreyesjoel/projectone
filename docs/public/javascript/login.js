document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    const nom = document.getElementById("nom").value; // Obtener el nombre
    const edat = document.getElementById("edat").value; // Obtener la edad

    // Sanitizar entradas para evitar XSS
    const sanitizedNom = nom.replace(/</g, "&lt;").replace(/>/g, "&gt;"); // Sanitiza el nombre
    const sanitizedEdat = edat.replace(/</g, "&lt;").replace(/>/g, "&gt;"); // Sanitiza la edad

    // Almacenar datos en localStorage
    localStorage.setItem("nom", sanitizedNom);
    localStorage.setItem("edat", sanitizedEdat);

    // Redirigir a logindone.html
    window.location.href = "logindone.html";
  });
