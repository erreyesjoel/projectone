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

/* Limpiar localStorage después de usar los datos, seria como destruir la session si se recarga la pagina, similar a un session destroy de php
localStorage.removeItem("nom");
localStorage.removeItem("edat");
# lo quitamos porque asi si el usuario recarga la pagina, seguira viendo el contenido de su registro, es decir, la session siga activa.
*/
