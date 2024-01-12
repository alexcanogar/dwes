<?php
session_name("sesion_datoscan");
session_start();
print "<h1>Sesiones01_1</h1>";

$_SESSION["nombre"] = "Pepito Conejo";
print "<p>El e es $_SESSION[nombre]</p>";

$productos = array("leche", "pan", "huevos");
$_SESSION["lista"] = $productos;


$usuario = array(
    "Nombre" => "Pepe",
    "Email" => "pepe@kk.com",
    "edad" => 34
);
$_SESSION["usuario"] = $usuario;

// session_destroy();

print "<a href='./sesiones01_2.php'>Sesiones 02</a>";