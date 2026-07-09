<?php
    session_start();

    require_once '../core/Autoload.php';

    AuthMiddleware::check();

    $user = $_SESSION["usuario"];
?>

<h1>Dashboard</h1>
<p>Bienvenido, <?php echo $user['nombre']; ?>!</p>
<p>Rol: <?php echo $user['rol']; ?></p>

<br>

<a href="logout.php">Cerrar sesion</a>