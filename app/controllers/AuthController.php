<?php 
    class AuthController 
    {
        private AuthService $authService;
        private LoginValidator $loginValidator;

        public function __construct()
        {
            $this->authService = new AuthService();
            $this->loginValidator = new LoginValidator();
        }

        public function login(string $email, string $password)
        {
            //Validamos los datos de entrada
            $errors = $this->loginValidator->validate($email, $password);
            if (!empty($errors))
            {
                return $errors;
            }

            //Autenticamos al usuario
            return $this->authService->login($email, $password);
        }

        public function logout()
        {
            $this->authService->logout();
        }
    }
?>