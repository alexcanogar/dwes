<?php 
require('./funciones.php');
session_start();

$_SESSION['loginError'] = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = recoge('username');
    $password = recoge('password');

    if(checkuser($username, $password) == null){
        $_SESSION['loginError'] = true;
        header('Location: ../views/login.php');
        exit();
    }else{
        unset($_SESSION['loginError']);
        $_SESSION['activeUser'] = checkuser($username,$password);
        header('Location: ../views/perfil.php');
        exit();
    }

    
}


?>