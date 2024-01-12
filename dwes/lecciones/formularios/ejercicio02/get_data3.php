<?php
print "<h2>Recibe datos 3 </h2>";

function get($var){
    if (isset($_POST[$var])){
        if($_POST[$var] != ""){
            $tmp = trim(htmlspecialchars(strip_tags($_POST[$var])));
            return $tmp;
         }
    }
    return null;
}

function verify($var){
    if(!is_null($var)){
        return($var);
    }
    return("Este dato no se ha introducido");
}

$name = get("name");
$age = get("age");
$class = get("class");

print("Nombre: ".verify($name)."<br>");
print("Age: ".verify($age)."<br>");
print("Class: ".verify($class)."<br>");

print("<a href='form2.html'>Volver al formulario</a>");

