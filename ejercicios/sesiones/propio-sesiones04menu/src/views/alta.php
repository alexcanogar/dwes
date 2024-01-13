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
    <h1 class="text-white text-7xl">Alta</h1>
    <form class="grid  w-1" action="../controllers/procesar_alta.php" method="POST">
        <label class="text-white" for="nombre">Nombre: </label>
        <input type="text" name="nombre">

        <label class="text-white" for="nombre">Apellidos: </label>
        <input type="text" name="surname">

        <label class="text-white" for="nombre">* Email: </label>
        <input type="mail" name="mail" required>

        <label class="text-white" for="nombre">* Contraseña: </label>
        <input type="password" name="password" required>

        <label class="text-white" for="nombre">* Repetir contraseña: </label>
        <input type="password" name="repassword" required>
        <?php
        if (isset($_SESSION['passError'])) {
            if ($_SESSION['passError']) {
                echo '<p style="color: red;">Las contraseñas no coinciden</p>';
                unset($_SESSION['passError']);
            }
        }
        ?>
        <label class="text-white" for="nombre">Foto de Perfil (max 1MB): </label>
        <input type="file" name="profilepic">
        <input class="block mt-1 p-2 text-white rounded bg-blue-900 hover:text-blue-500 " type="submit" value="Darme de alta">
    </form>

    <?php include('../modules/footer.php')?>

</body>

</html>