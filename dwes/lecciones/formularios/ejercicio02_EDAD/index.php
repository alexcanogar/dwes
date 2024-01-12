<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>F02 Calcular Edad</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       <p>Nombre: <input type="text" name="nombre"></p>
       <p>Fecha: <input type="date" name="fecha"></p>
        <button type="submit" name="boton" value="mEdad">Mostrar edad</button>
        <button type="submit" name="boton" value="">Ir recibe_datos.php</button>

    </form>
</body>
</html>