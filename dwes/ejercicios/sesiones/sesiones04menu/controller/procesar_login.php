<?php

require_once('../includes/modelo.php');
require_once('../includes/funciones.php');

session_start();


// print "<pre>";
// print "Matriz \$_POST" . "<br>";
// print_r($_POST);
// print "</pre>\n";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $password = recoge("password");
    $username = recoge("username");

    //######Comprobaciones
    if ($password == null or $username == null) {
        $_SESSION["errorLoginPass"] = "Los campos no pueden estar vacios";
        header("Location: ../login.php");
        return; //para que no ejecute nada por debajo
    }

    //Si llegamos, es porque los datos no estan vacios
    $usuario = checkuser($username, $password);  //devuelve objeto

    
}
if ($usuario == null) {
    $_SESSION["errorLoginPass"] = "Credenciales inválidas";
    header("Location: ../login.php");
    return;
} else {
    unset($_SESSION["errorLoginPass"]);
    $_SESSION["usuarioObjet"] = $usuario;
    header("Location: ../perfil.php");

}

//Volvemos al formulario
print "<p><a href='../login.php'>Ir al formulario de login</a></p>";
print "<p><a href='../alta.php'>Ir al formulario de alta</a></p>";
