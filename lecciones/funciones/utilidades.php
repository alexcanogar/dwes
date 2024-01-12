<?php
//######## FUNCION RECOGER
function recoge($var)
{
    if (isset($_POST[$var])) {
        if ($_POST[$var] != "") {
            $tmp = trim(htmlspecialchars(strip_tags($_REQUEST[$var])));
            return $tmp;
        }
    }
    return null;
}

?>