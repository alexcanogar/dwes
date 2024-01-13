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
<body class="h-screen bg-slate-800 text-white">
    <?php include'../modules/nav.php'?>
    <main>
        <?php 
        if (isset($_SESSION['activeUser']) and $_SESSION['activeUser'] != null) {
            print('
                <table class="border border-double">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img style="width: 10rem" src="../bbdd/img/'. $_SESSION["activeUser"]->picture .'" alt="Imagen de perfil"></td>
                            <td>'. $_SESSION['activeUser']->name .'</td>
                            <td>'. $_SESSION['activeUser']->surname .'</td>
                            <td>'. $_SESSION['activeUser']->mail .'</td>
                        </tr>
                    </tbody>
                </table>
            ');
        } else {
            echo ('
            <p class="mb-4" style="color: red;">No se encuentra ningun usuario activo, vuelve a iniciar sesión</p>
            <a href="../views/login.php" class="text-white rounded bg-blue-900 hover:text-blue-500">Volver a iniciar sesión</a>
            ');
        }
        ?>
    </main>

    <?php include('../modules/footer.php')?>

</body>
</html>
