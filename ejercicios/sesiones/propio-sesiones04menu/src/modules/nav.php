<?php
require('../controllers/funciones.php');

// Obtén el nombre del usuario si está autenticado
$nombreUsuario = isset($_SESSION['activeUser']) ? $_SESSION['activeUser']->mail : "";

echo '
<p style="font-weight: bolder; font-size: 2rem; background-color: #333;
text-align: center; padding: 2rem 0">
ALTA Y LOGIN DE USUARIOS</p>
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="../views/index.php" class="block py-2 px-3 text-white rounded bg-transparent hover:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="../views/alta.php" class="block py-2 px-3 text-white rounded bg-transparent hover:text-blue-500" aria-current="page">Alta</a>
        </li>';

if (isset($_SESSION['activeUser'])) {
    echo '
        <li>
          <a href="../views/perfil.php" class="block py-2 px-3 text-white rounded bg-transparent hover:text-blue-500" aria-current="page">Perfil</a>
        </li>
        <li>
          <span style="color: red" class="block py-2 px-3 rounded bg-transparent">Hola, ' . $nombreUsuario . '</span>
        </li>
        <li>
          <a href="../controllers/logout.php" class="block py-2 px-3 text-white rounded bg-transparent hover:text-blue-500" aria-current="page">Logout</a>
        </li>';
} else {
    echo '
        <li>
          <a href="../views/login.php" class="block py-2 px-3 text-white rounded bg-transparent hover:text-blue-500" aria-current="page">Login</a>
        </li>';
}

echo '
      </ul>
    </div>
  </div>
</nav>
';

?>
