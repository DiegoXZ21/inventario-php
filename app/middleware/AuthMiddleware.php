<?php 
    class AuthMiddleware
    {
        public static function check()
        {
            if(!Session::has('usuario')){
                header("Location: login.php");
                exit;
            }
        }
        public static function guest()
        {
            if(Session::has('usuario')){
                header("Location: dashboard.php");
                exit;
            }
        }
    }
?>