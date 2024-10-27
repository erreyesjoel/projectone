<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Completo</title>
    <link rel="stylesheet" href="css/logindb.css"> 
</head>
<body>
    <div class="header">
        <h1>Registro Completo</h1>
    </div>

    <div class="form-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nom"]) && isset($_POST["edat"])) {
                $nom = htmlspecialchars($_POST["nom"]); // Sanitiza el nombre htmlespecialchars, seguridad
                $edat = htmlspecialchars($_POST["edat"]); // Sanitiza la edad con htmlespecialchars

                echo "<p>Benvingut, $nom</p>";
                echo "<p>Tens, $edat anys</p>";
            }
        } else {
            echo "<p>No se recibieron datos.</p>";
        }
        ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Joel Erreyes. Tots els drets reservats.</p>
    </footer>
</body>
</html>
