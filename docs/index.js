const characters = {
  goku: {
    image: "imags/kakarot.png",
    description:
      "Goku es un guerrero Saiyan que ha defendido la Tierra en numerosas ocasiones. Su búsqueda constante de superación y entrenamiento lo han llevado a ser uno de los luchadores más poderosos del universo.",
    transformations:
      "Super saiyan 1, Super saiyan1 grado 3, Super Saiyan 2, Super Saiyan 3, Super Saiyan dios, Super saiyan blue, Ultrainstinto señal, Ultainstinto perfecto",
  },
  vegeta: {
    image: "imags/vegeta.jpg",
    description:
      "Vegeta, el príncipe de los Saiyans, es conocido por su orgullo y fuerza. A lo largo de su historia, ha pasado de ser un villano a un aliado valioso en la lucha contra los enemigos más poderosos.",
    transformations:
      "Super saiyan 1, Super vegeta, Super saiyan 2, Super saiyan dios, Super saiyan blue, Super saiyan blue evolution",
  },
  trunksFuturo: {
    image: "imags/trunksFT.jpg",
    description:
      "Trunks del futuro es el hijo de Vegeta y Bulma. Viaja en el tiempo para advertir a los guerreros Z sobre amenazas inminentes y es conocido por su valentía y habilidades de lucha excepcionales.",
    transformations: "Super saiyan 1, Super saiyan 2, Super saiyan rage",
  },
};

document
  .getElementById("characterForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevenir el comportamiento por defecto del formulario
    const selectedCharacter = document.getElementById("personatge").value;
    const character = characters[selectedCharacter];

    if (character) {
      const characterInfoDiv = document.getElementById("characterInfo");
      characterInfoDiv.innerHTML = `
            <h3>Has seleccionat: ${selectedCharacter}</h3>
            <img class='personatge-img' src='${character.image}' alt='Imatge de ${selectedCharacter}'>
            <p>${character.description}</p>
            <ul>
                <li>${character.transformations}</li>
            </ul>
        `;
    } else {
      document.getElementById("characterInfo").innerHTML =
        "<p>Personatge no trobat.</p>";
    }
  });
