<?php
    class Session
    {
        //Inicia la sesión si no está iniciada
        public static function start(): void
        {
            if(session_status() === PHP_SESSION_NONE){
                session_start();
            }
        }

        //Guarda un valor en la sesión
        public static function set(string $key, mixed $value): void
        {
            self::start();
            $_SESSION[$key] = $value;
        }

        //Obtiene un valor de la sesión
        public static function get(string $key, mixed $default = null): mixed
        {
            self::start();
            return $_SESSION[$key] ?? $default;
        }

        //Verifica si un valor existe en la sesión
        public static function has(string $key): bool
        {
            self::start();
            return isset($_SESSION[$key]);
        }

        //Elimina un valor especifico de la sesión
        public static function remove(string $key): void
        {
            self::start();
            unset($_SESSION[$key]);
        }

        //Destruye completamente la sesión
        public static function destroy(): void
        {
            self::start();
            
            $_SESSION = [];

            if (ini_get('session.use_cookies')) {
                $params = session_get_cookie_params();

                setcookie(
                    session_name(),
                    '',
                    time() - 42000,
                    $params['path'],
                    $params['domain'],
                    $params['secure'],
                    $params['httponly']
                );
            }
            session_destroy();
        }
    }
?>