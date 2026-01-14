<?php
    $nombre = $_POST['nombre'] ?? "";
    $correo = $_POST['correo'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    
    <h2>Navegación</h2>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="calistenia.php">Calistenia</a></li>
        <li><a href="gym.php">Gimnasio (Pesas)</a></li>
        <li><a href="contacto.php">Contacto</a></li>
    </ul>
    
    <hr>

    <h2>Formulario enviado con Método POST</h2>
    <h3>Datos Recibidos:</h3
    <ul>
    <li><strong>Nombre:</strong> <?=$nombre?></li>
    <li><strong>Correo electrónico:</strong><?=$correo?></li>
    </ul>
    <p>¡Gracias por contactarnos! Hemos recibido tu información correctamente.</p>
</body>
</html>