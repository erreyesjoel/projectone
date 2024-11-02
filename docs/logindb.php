<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logindb</title>
    <link rel="stylesheet" href="css/logindb.css"> 
</head>
<body>
    <div class="header">
        <h1>Bienvenido a la pantalla de registro de la página de Dragon Ball!</h1>  
        <img src="imags/gokuindex.png" alt="Goku">
    </div>

    <div class="form-container">
        <form method="post" action="logindone.php"> 
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
            <label for="edat">Edat:</label>
            <input type="number" id="edat" name="edat" min="18" required>
            <button type="submit">Enviar formulario</button> 
        </form>
    </div>    
    <img class="gokulogin" src="imags/gokulogin.png" alt="Goku en login">
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Joel Erreyes. Tots els drets reservats.</p> <!-- Footer simplificado sin el menú de navegación -->
    </footer>
</body>
</html>
