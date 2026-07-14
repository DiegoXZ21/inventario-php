<?php 
    class Usuario
    {
        private PDO $db;
        public function __construct()
        {
            $this->db = Database::connect();
        }

        public function buscarPorEmail($email)
        {
            $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchObject("Usuario");
        }
    }
?>