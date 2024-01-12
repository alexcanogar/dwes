<?php
    session_start();
    if($_POST["submit"] == "sumar" and $_SESSION['num']<10){
        $_SESSION['num']++;
    }
    if($_POST["submit"] == "restar" and $_SESSION['num']>0){
        $_SESSION['num']--;
    }
    if($_POST["submit"] == "reset"){
        $_SESSION['num'] = 0;
    }

    header("Location: formulario02.php");
?>