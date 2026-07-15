<?php 
    class UsuarioRepository {
        private PDO $db;
        public function __construct()
        {
            $this->db = Database::connect();
        }
        public function findByEmail(string $email): ?Usuario
        {
            $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$data) 
            {
                return null;
            }

            $usuario = new Usuario();
            $usuario->id = $data['id'];
            $usuario->nombre = $data['nombre'];
            $usuario->email = $data['email'];
            $usuario->password = $data['password'];
            $usuario->rol = $data['rol'];
            $usuario->estado = (bool)$data['estado'];
            $usuario->createdAt = $data['created_at'];
            $usuario->updatedAt = $data['updated_at'];
            return $usuario;
        }
    }
?>