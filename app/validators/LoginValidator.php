<?php 
    class LoginValidator
    {
        public function validate(string $email, string $password): array
        {
            $errors = [];
            if(empty(trim($email)))
            {
                $errors["email"] = "El correo electrónico es obligatorio";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors["email"] = "El correo electrónico no es válido";
            }

            if(empty($password))
            {
                $errors["password"] = "La contraseña es obligatoria";
            }

            return $errors;
        }
    }
?>