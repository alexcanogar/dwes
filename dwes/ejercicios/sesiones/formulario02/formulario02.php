<?php
    session_start();
    if(!isset($_SESSION["num"])){
        $_SESSION["num"] = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SUBIR Y BAJAR NÚMERO</h1>
    <p>Usa los botones para modificar el valor</p>
    <form action="bFormulario02.php" method="post">
        <p>
            <button type="submit" name="submit" value="restar">-</button>
                <?php
                    print_r($_SESSION['num']);
                ?>
            <button type="submit" name="submit" value="sumar">+</button>
        <p>
            <p><button type="submit" name="submit" value="reset">BORRAR DATOS</button></p>
    </form>

</body>
</html>