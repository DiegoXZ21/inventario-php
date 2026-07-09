<?php 
    class AuthController 
    {
        private $usuarioModel;

        public function __construct()
        {
            $this->usuarioModel = new Usuario();
        }

        public function login($email, $password)
        {
            $user = $this->usuarioModel->buscarPorEmail($email);

            if(!$user){
                return "Usuario no encontrado";
            }

            if(!password_verify($password, $user->password)){
                return "Contraseña incorrecta";
            }

            $_SESSION['usuario'] = [
                'id' => $user->id,
                'nombre' => $user->nombre,
                'email' => $user->email,
                'rol' => $user->rol
            ];

            return true;
        }

        public function logout()
        {
            session_destroy();
            header("Location: index.php");
        }
    }
?>