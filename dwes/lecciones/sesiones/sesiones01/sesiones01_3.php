<?php
session_name("sesion_maladata");
session_start();
print "<pre>";
print_r($_SESSION);
print "</pre>";

print "<a href='./sesiones01_1.php'>Sesiones 01</a>";
