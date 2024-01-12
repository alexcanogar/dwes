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
    <title>Document</title>
    <link rel="stylesheet" href="./styles/estilos.css?=v1">
</head>
<body>
    <nav>
        <?php include './nav.php';?>
    </nav>
    <main>
        <h2>Total de usuarios de alta: <?php echo(contarUsuarios());?></h2>
    </main>
    <footer>
        <?php include './footer.php';?>
    </footer>
</body>
</html>