<?php 
    require_once 'core/Autoload.php';
    try{
        $db = Database::connect();

        echo "<h1>Conexion exitosa a la base de datos</h1>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>