<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/output.css">
</head>

<body class="h-screen gird bg-slate-800  align-center justify-center content-center items-center text-center">
    <?php include '../modules/nav.php' ?>
    <h1 class="text-white text-7xl">Login</h1>
    <form class="grid  w-1" action="../controllers/procesar_login.php" method="POST">
       
        <label class="text-white" for="nombre">Usuario: </label>
        <input type="text" name="username" required>
        <label class="text-white" for="nombre">Contraseña: </label>
        <input type="password" name="password" required>
        <?php
        if (isset($_SESSION['loginError'])) {
            if ($_SESSION['loginError']) {
                echo '<p style="color: red;">Datos erróneos</p>';
                unset($_SESSION['loginError']);
            }
        }
        ?>
        
        <input class="block mt-1 p-2 text-white rounded bg-blue-900 hover:text-blue-500 " type="submit" value="Iniciar sesión">
    </form>
    <?php include('../modules/footer.php')?>

</body>

</html>