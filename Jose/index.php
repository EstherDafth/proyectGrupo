<?php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Nombre</title>
</head>
<body>

   echo "Hola mundo"

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el nombre del formulario
        $nombre = htmlspecialchars($_POST['nombre']);
        // Mostrar un saludo
        echo "<h2>Hola, $nombre! Bienvenido a nuestra página.</h2>";
    }
    ?>
</body>
</html>