<?php 
    class AuthService
    {
        private UsuarioRepository $usuarioRepository;

        public function __construct()
        {
            $this->usuarioRepository = new UsuarioRepository();
        }

        public function login(string $email, string $password)
        {
            $user = $this->usuarioRepository->findByEmail($email);

            if(!$user){
                return "Usuario no encontrado";
            }

            if(!password_verify($password, $user->password)){
                return "Contraseña incorrecta";
            }

            Session::set('usuario', [
                'id' => $user->id,
                'nombre' => $user->nombre,
                'email' => $user->email,
                'rol' => $user->rol
            ]);

            return true;
        }

        public function logout()
        {
            Session::destroy();
        }

    }
?>