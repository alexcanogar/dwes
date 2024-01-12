<?php
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once('../../funciones/utilidades.php');
        $mayusc = recoge('mayusc');
        $minus = recoge('minus');
        print_r($_POST);

        if(isset($_POST["borrar"])){
            session_destroy();
            exit();
        }

        if($mayusc == ""){
            $_SERVER['mayusc'] = "";
        }
        if($minus == ""){
            $_SERVER['minus'] = "";
        }
        if($minus != "" && $mayusc != ""){
            header("Location: bFormulario01.php");   
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <h1>Formulario 4 - Mayusc and minus</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <p>Mayusculas:<input type="text" name="mayusc" id="mayusc"></p>
    <p>Minúsculas: <input type="text" name="minus" id="minus"></p>
    <input type="submit" value="Enviar">
    <input type="reset" value="borrar">
    </form>
    <?php
        if(!isset($_SERVER['mayusc'])){
            print '<p style="color:red;">Error mayusculas vacías</p>';
        }if(!isset($_SERVER['minus'])){
            print '<p style="color:red;">Error minúsculas vacías</p>';
        }
    ?>
</body>
</html>