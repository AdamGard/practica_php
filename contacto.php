<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Método POST</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    
    <hr>
    
    <h2>Navegación</h2>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="calistenia.php">Calistenia</a></li>
        <li><a href="gym.php">Gimnasio (Pesas)</a></li>
        <li><a href="contacto.php">Contacto</a></li>
    </ul>
    
    <hr>
    
    <h2>Envíanos tus datos</h2>
    <p>Completa el siguiente formulario para ponerte en contacto con nosotros.</p>
    
    <form method="post" action="recibido_post.php">
        <p>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" size="40" required>
        </p>
        
        <p>
            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo" size="40" required>
        </p>
        
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
    
    <p><a href="index.php">Volver al inicio</a></p>
</body>
</html>
