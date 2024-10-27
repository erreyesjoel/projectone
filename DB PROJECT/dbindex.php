<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina de Bola de Drac</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Pàgina de Bola de Drac</h1>
    <nav class="login">
        <a href="logindb.php" class="buttonLogin">Login</a>
    </nav>
    <form method="post" action="">
        <label for="personatge">Quin personatge vols?:</label>
        <select name="personatge" id="personatge" required>
            <option class="goku" value="goku">Goku</option>
            <option class="vegeta" value="vegeta">Vegeta</option>
            <option class="trunksFuturo" value="trunksFuturo">Trunks Futuro</option>
        </select>
        <button type="submit">Enviar elecció</button>
    </form>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Joel Erreyes. Tots els drets reservats.</p> <!-- Footer simplificado sin el menú de navegación -->
    </footer>

    <?php
    // Definir un array associant els personatges a les seves imatges i descripcions
    // a goku li donem com que l'atribut que el defineix es la foto kakarot.png, aixi amb tots
    // guardamos el array en la variable eleccio $
    $eleccio = array(
        "goku" => array(
            "imatge" => "imags/kakarot.png", 
            "descripcio" => "Goku es un guerrero Saiyan que ha defendido la Tierra en numerosas ocasiones. Su búsqueda constante de superación y entrenamiento lo han llevado a ser uno de los luchadores más poderosos del universo.",
            "transformacions" => "Super saiyan 1, Super saiyan1 grado 3, Super Saiyan 2, Super Saiyan 3 , Super Saiyan dios, Super saiyan blue, Ultrainstinto señal, Ultainstinto perfecto"
        ),
        "vegeta" => array(
            "imatge" => "imags/vegeta.jpg", 
            "descripcio" => "Vegeta, el príncipe de los Saiyans, es conocido por su orgullo y fuerza. A lo largo de su historia, ha pasado de ser un villano a un aliado valioso en la lucha contra los enemigos más poderosos.",
            "transformacions" => "Super saiyan 1, Super vegeta, Super saiyan 2, Super saiyan dios, Super saiyan blue, Super saiyan blue evolution"
        ),
        "trunksFuturo" => array(
            "imatge" => "imags/trunksFT.jpg", 
            "descripcio" => "Trunks del futuro es el hijo de Vegeta y Bulma. Viaja en el tiempo para advertir a los guerreros Z sobre amenazas inminentes y es conocido por su valentía y habilidades de lucha excepcionales.",
            "transformacions" => "Super saiyan 1, Super saiyan 2, Super saiyan rage" 
       )
    );

    // Comprovar si el formulari s'ha enviat
    // Si el formulario se ha enviado (es decir, si el método de solicitud es POST), esta línea toma el valor del campo personatge del formulario enviado y lo almacena en la variable $personatge.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["personatge"])) { // Verifica que la clave exista, si existe cogemos el campo personatge, que esta definido en el name, se llama asi, del html
            $personatge = $_POST["personatge"];
            
            // Si el personatge seleccionat està a la llista, cojo el dato select personatge (el desplegable) y el array eleccio
            if (array_key_exists($personatge, $eleccio)) {
                $imatge = $eleccio[$personatge]["imatge"]; // Assignar la imatge corresponent
                $descripcio = $eleccio[$personatge]["descripcio"]; // Obtener la descripción
                $transformacions = $eleccio[$personatge]["transformacions"];
                echo "<h3>Has seleccionat: a $personatge</h3>";
                echo "<img class='personatge-img' src='$imatge' alt='Imatge de $personatge'>";
                echo "<p>$descripcio</p>"; // Mostrar la descripción del personaje
                echo "<li>$transformacions</li>"; // Mostrar transformacions del personatge
            } else {
                echo "<p>Personatge no trobat.</p>";
            }
        }
    }        
    ?>
</body>
</html>
