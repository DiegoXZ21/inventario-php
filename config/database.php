<?php
    class Database
    {
        private static $connection = null;

        public static function connect()
        {
            if (self::$connection === null) {
                $host = Config::DB_HOST;
                $dbname = Config::DB_NAME;
                $user = Config::DB_USER;
                $pass = Config::DB_PASS;

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