<?php 
    class Usuario
    {
        public ?int $id = null;
        public string $nombre;
        public string $email;
        public string $password;
        public string $rol;
        public bool $estado;
        public ?string $createdAt = null;
        public ?string $updatedAt = null;
    }
?>