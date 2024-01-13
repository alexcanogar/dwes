<?php 

function recoge($var)
{
    if (isset($_REQUEST[$var])) {
        if ($_REQUEST[$var] != "") {
            $tmp = trim(htmlspecialchars(strip_tags($_REQUEST[$var])));
            return $tmp;
        }
    }
    return null;
}

function testPass($password, $repassword)
{
    if($password === $repassword){
        return true;
    }else{
        return false;
    }
}

function checkuser($user, $pass)
{
    $lista_usuarios = [];
    $file = '../bbdd/data.json'; 

    $jsonData = file_get_contents("./{$file}", FILE_USE_INCLUDE_PATH);
    $lista_usuarios = json_decode($jsonData);

    foreach ($lista_usuarios as $usuario) {
        if (
            $usuario->mail == $user and 
            $usuario->password == $pass
        ) {
            return $usuario;
        }
    }
    return null;
}


?>