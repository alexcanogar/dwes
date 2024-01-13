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
        <?php if (isset($_SESSION['userCreated'])) {
            if($_SESSION['userCreated'] = true){
                print '<p class="dissapear">Usuario creado con exito!</p>';
                unset($_SESSION['userCreated']);
            }
        }?>
        <p>Total de suarios de alta: 
            <?php 
                $i = 0;
                $user_list = [];
                $bdFile = '../bbdd/data.json';
        
                $bbdd = file_get_contents($bdFile);
                $user_list = json_decode($bbdd) ?? [];
                foreach ($user_list as $usuario) {
                    $i++;
                }
                echo $i;
            ?>
        </p>
        <p>Fecha y hora de creación del usuario USUARIO</p>
    </main>
    <?php include('../modules/footer.php')?>
</body>
</html>