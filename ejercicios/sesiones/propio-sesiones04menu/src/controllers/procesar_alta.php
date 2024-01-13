<?php 

require('./funciones.php');

session_start();
$_SESSION['passError'] = false;
$_SESSION['userCreated'] = false;

print_r($_POST);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = recoge('nombre');
    $surname = recoge('surname');
    $mail = recoge('mail');
    $password = recoge('password');
    $repassword = recoge('repassword');
    $img = recoge('profilepic');

    if(testPass($password, $repassword)){
        unset($_SESSION['passError']);

        $user = new stdClass();
        $user->name = $name;
        $user->surname = $surname;
        $user->mail = $mail;
        $user->password = $password;
        $user->picture = $img;

        $ruta_subida = "../bbdd/img/";
        if (isset($_FILES['profilepic']['tmp_name']) && !empty($_FILES['profilepic']['tmp_name'])) {
            move_uploaded_file($_FILES['profilepic']['tmp_name'], $ruta_subida . $img);
        }
        
        $user_list = [];
        $bdFile = '../bbdd/data.json';

        $bbdd = file_get_contents($bdFile);
        $user_list = json_decode($bbdd) ?? [];

        array_push($user_list, $user);
        $json_users = json_encode($user_list, JSON_PRETTY_PRINT);
        file_put_contents("../bbdd/data.json", $json_users);

        header('Location: ../views/index.php');
        $_SESSION['userCreated'] = true;
        
    }else{
        unset($_SESSION['userCreated']);
        $_SESSION['passError'] = true;
        header('Location: ../views/alta.php');


    }
}

?>