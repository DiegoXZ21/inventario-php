<?php
    class Database
    {
        private static $connection = null;

        public static function connect()
        {
            if (self::$connection === null) {
                $host = 'localhost';
                $dbname = 'inventario';
                $user = 'root';
                $pass = '';

                try {
                    self::$connection = new PDO(
                        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                        $user,
                        $pass
                    );

                    self::$connection->setAttribute(
                        PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION
                    );
                } catch (PDOException $e) {
                    die("Error: " . $e->getMessage());
                }
            }

            return self::$connection;
        }
    }
?>