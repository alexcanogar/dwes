<?php
print "<h1>RECIBE DATOS 2</h1>";
print"<link rel='stylesheet' href='style.css'>";


if(isset($_POST["name"]) && $_POST["name"] != ""){
    $name = trim(htmlspecialchars(strip_tags($_POST["name"])));
    
}else{
    $nameError = "No se ha escrito ningun nombre";
}

if(isset($_POST["age"]) && $_POST["age"] != ""){
    $age = $_POST["age"];
}else{
    $ageError = "No se ha introducido la edad";
}

if(isset($_POST["class"]) && $_POST["class"] != ""){
    $class = $_POST["class"];
}else{
    $classError = "No ha elegido curso";
}

if(isset($name)){
    print "Nombre: $name<br>";
}else{
    print "Nombre: $nameError<br>";
}

if(isset($age)){
    print "Edad: $age<br>";
}else{
    print "Edad: $ageError<br>";
}

if(isset($class)){
    print "Curso: $class<br>";
}else{
    print "Nombre: $classError<br>";
}

print "<p><a href='form2.html'>Volver al formulario</a></p>";
