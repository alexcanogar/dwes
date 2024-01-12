<?php
    function dividir($numA, $numB){
        if($numB == 0){
            throw new Exception("ERROR: Division por cero");
        }
        return print $numA/$numB;
    }

    $a = 4;
    $b = 5;
    try{
        dividir($a,$b);
    }catch (Exception $e){
        print"Excepcion capturada: ".$e->getMessage();
    }


?>