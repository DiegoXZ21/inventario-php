<?php 
    require_once '../core/Autoload.php';
    $controller = new AuthController();

    $controller->logout();

    header("Location: login.php");
    exit;
?>