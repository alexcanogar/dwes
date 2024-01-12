<?php
session_name("sesion_datoscan");
session_start();
$lista = $_SESSION["lista"];
$usuario = $_SESSION["usuario"];


print "<pre>";
print_r($_SESSION);
print "</pre>";

print "<a href='./sesiones01_1.php'>Sesiones 01</a>";

$nombre = $_SESSION["nombre"];

print "<h1>Sesiones01_2</h1>";
print "<p>Mi nombre es $nombre</p>";
print "<p>Mi compra es: </p><ol>";
foreach($lista as $i){
    print"<li>$i</li>";
};
print "</ol>";

print "<p>Mi usuario es: </p><ol>";
foreach($usuario as $i){
    print "<li>$i</li>";
};
print "</ol>";
