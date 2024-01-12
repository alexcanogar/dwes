"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario 04</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>Nombre:<input type="text" name="nombre"></p>
        <p>Edad:<input type="text" name="edad"></p>
        <button type="submit" name="boton" value="valor1">Valor 1</button>
        <button type="submit" name="boton" value="valor2">Valor 2</button>
        <input type="submit" name="boton" value="valor3">
    </form>
      
    <?php
        $boton;
        if(isset($_POST["boton"])) {
            print "<pre>";
            print "Matriz \$POST". "<br>";
            print_r($_POST);
            print "</pre>";
        }
        
        
        if($_POST["boton"] == "valor1"){
            $boton = "Boton 1";
        }if($_POST["boton"] == "valor2"){
            $boton = "Boton 2";
        }if($_POST["boton"] == "valor3"){
            $boton = "Boton 3";
        }

        print "<p>El boton pulsado es <strong>$boton</strong></p>";

    ?>

</body>
</html>