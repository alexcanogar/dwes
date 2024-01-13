<?php 
    session_start();
    if (isset($_SESSION['activeUser'])) {
        unset($_SESSION['activeUser']);
        header("Location: ../views/index.php");
    }
    header("Location: ../views/index.php");

        
    


?>