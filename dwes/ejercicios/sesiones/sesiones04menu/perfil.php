<?php
    require_once('./includes/modelo.php');
    require_once('./includes/funciones.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/estilos.css">
    <title>Perfil</title>
</head>
<body>
    <nav>
        <?php include 'nav.php';?>
    </nav>
    <main>
    <?php
    if(isset($_SESSION["usuarioObjet"])) {
        $usuario = $_SESSION["usuarioObjet"];

        print "<table border='1'>";
        print "<tr>";
        print "<th>Imagen</th>";
        print "<th>Nombre</th>";
        print "<th>Apellido</th>";
        print "<th>Email</th>";
        print "</tr>";
        print "<tr>";
        print "<td><img src='./bbdd/$usuario->imagen' alt='foto perfil' width='200'></td>";
        print "<td>$usuario->nombre</td>";
        print "<td>$usuario->apellidos</td>";
        print "<td>$usuario->email</td>";
        print "</tr>";
        print "</table>";
    } 
    ?>
    </main>
    <footer>
        <?php include './footer.php';?>
    </footer>
</body>
</html>
