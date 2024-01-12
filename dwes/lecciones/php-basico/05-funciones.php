<?php
    $nombre1 = "Pedro";
    $nombre2;
    $apellidos = "Sanchez";

    print "<p> Tu nombre es <strong>";
    if (isset($nombre1)) {
        print "$nombre1";
    }
    if (isset($nombre2)) {
        print " $nombre2";
    }
    if (isset($apellidos)) {
        print " $apellidos";
    }
    print "</strong></p><hr>";

    $sexo = "F";
    if (is_null($sexo)){
        print "El sexo no está definido";
    } elseif ($sexo =="M"){
        print"Sexo: Masculino";
    } elseif ($sexo =="F"){
        print "Sexo: Femenino";
    }
    print "<hr>";

    $numero = 5;
    if(is_int($numero)){
        print "La variable ". $numero ." es int";
    }
    print "<hr>";

    function suma($a, $b){
        return $a + $b;
    }

    print suma(4,5)."<hr>";

    function negrita($frase, $porcentaje){
        print "LA FRASE INTRODUCIDA ES:<br>";
        print "<p style=\"font-size:$porcentaje px\">".$frase."</p>";
    }
    negrita("Hola mundo",12);
    

?>