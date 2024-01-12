<?php
session_start();
$nombre = $_SESSION["nombre"];
$edad = $_SESSION["edad"];

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css" title="Color">
  <title>Formulario3</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>PAGINA PRINCIPAL FORMULARIO 3</h1>
  </header>
  <main>
    <h3>Datos recibidos:</h3>
    <?php
    print "Nombre: $nombre" . "<br>";
    print "Edad: $edad" . "<br>";
    ?>


    <p><a href='./sesiones01_1.php'>Volver a sesion 2</a></p>

  </main>
  <footer>
    <hr>
    <p>Autor: Juan Antonio Cuello</p>
  </footer>
</body>

</html>