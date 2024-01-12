<?php

require_once ('../../funciones/utilidades.php');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = recoge("name");
    $edad = recoge("age");
    
    $OK = true;
    $nombreError = "";
    $edadError = "";
    if(is_null($nombre)){
        $nombreError = "Falta el nombre";
        $OK = false;
    }else if(is_null($edad)){
        $edadError = "Falta la edad";
        $OK = false;
    }else if(!is_numeric($edad)){
        $edadError = "La edad ha de ser numérica";
        $OK = false;
    }

    if($OK){
        header("Location: main.php?nombre=" . $nombre . "&edad=". $edad);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Form 3</h1>
    </header>
    <main>
        <form action="form3.php" method="post">
            <p>Name: <input type="text" name="name"></p>
            <p>Age: <input type="text" name="age"></p> 
            <input type="submit" value="Enviar">
        </form>

        <?php
            if(isset($nombreError)){
                print "<p class='error'>$nombreError</p>";
            }
            if(isset($edadError)){
                print "<p class='error'>$edadError</p>";
            }
        ?>
    </main>
    <footer>
        <hr>
        <p>Autor: Alejandro Canovas</p>
    </footer>

</body>
</html>