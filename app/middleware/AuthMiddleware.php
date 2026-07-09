<?php 
    class AuthMiddleware
    {
        public static function check()
        {
            if(!isset($_SESSION['usuario'])){
                header("Location: login.php");
                exit;
            }
        }
        public static function guest()
        {
            if(isset($_SESSION['usuario'])){
                header("Location: dashboard.php");
                exit;
            }
        }
    }
?>