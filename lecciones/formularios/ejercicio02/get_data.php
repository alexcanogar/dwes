<?php
    print "<pre>";
    print "Matriz \$_REQUEST"."<br>";
    print_r ($_REQUEST);
    print "</pre>";

    print "<p><a href='form2.html'>Volver al formulario</a><br>";

    $name = $_POST["name"];
    $age = $_POST["age"];
    $class = $_POST["class"];

print "Nombre: $name<br>";
print "Edad: $age<br>";
print "Nombre: $class<br>";

?>