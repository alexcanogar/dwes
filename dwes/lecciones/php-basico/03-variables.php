<?php
    $entero = 5;
    $decimal = 5.1;
    $cadena = "Hola mundo";
    $booleano = True;
    $falso = False;
    $cambiante = 5;
    echo " " . gettype($entero) . "<br>";
    define("LIMITE", 1000);

    print $entero+$decimal+LIMITE;


    print "<hr>";
    print "Ruta del servidor: ". $_SERVER["PHP_SELF"]. "<br>";
    print "Nombre del servidor: ".$_SERVER["SERVER_NAME"]."<br>";
    print "Software del servidor: ".$_SERVER["SERVER_SOFTWARE"]."<br>";
    print "Protocolo: ".$_SERVER["SERVER_PROTOCOL"]."<br>";

    print "<hr>";
    $name = "Juan";
    print "Me llamo $name <br>";

    $prefijo = "Super";
    print "Estoy {$prefijo}contento <br>";

    $matriz = [0, 1, 10, 100, 1000];
    foreach ($matriz as $valor){
        print $valor ."<br>";
    }

?>