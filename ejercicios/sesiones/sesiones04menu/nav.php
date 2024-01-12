
<h1 class="titulo">ALTA Y LOGIN DE USUARIOS</h1>
<nav class="nav">
    <div class="left">
    <ul>
            <li ><a href="index.php">Home</a></li>
            <li ><a href="alta.php">Alta</a></li>
    </ul>
    </div>

    <div class="right">
    <ul>
        <?php
            if(isset($_SESSION["usuarioObjet"])){
                $usuario = $_SESSION["usuarioObjet"];
                echo
                ('
                    <li class="user der">Hola, ' .  $usuario->email . '</li>
                    <li class="der"><a href="./perfil.php">Perfil</a></li>
                    <li class="der"><a href="./controller/procesar_logout.php">Logout</a></li>
                    ');
                } else echo('<div class="right"><li class="der"><a href="login.php">Login</a></li></div>');
                ?>
    </ul>
</div>
</nav>

