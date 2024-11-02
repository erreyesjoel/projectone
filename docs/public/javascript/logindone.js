// Obtener los datos de localStorage
const nom = localStorage.getItem("nom");
const edat = localStorage.getItem("edat");

// Verificar si los datos están disponibles
if (nom && edat) {
  const welcomeMessage = `
        <p>Benvingut, ${nom}</p>
        <p>Tens, ${edat} anys</p>
    `;
  document.getElementById("welcomeMessage").innerHTML = welcomeMessage; // Mostrar el mensaje
} else {
  document.getElementById("welcomeMessage").innerHTML =
    "<p>No se recibieron datos.</p>";
}

// Limpiar localStorage después de usar los datos
localStorage.removeItem("nom");
localStorage.removeItem("edat");
