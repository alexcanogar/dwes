<?php
require_once('../includes/modelo.php');
require_once('../includes/funciones.php');

session_start();

unset($_SESSION["usuarioObjet"]);
header("Location: ../index.php");