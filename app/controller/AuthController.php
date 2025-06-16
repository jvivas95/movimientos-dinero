<?php

require_once __DIR__ . '/../model/usuario.php';

class AuthController {

    // Función para registrar un nuevo usuario
    public function registro(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nusuario = $_POST['nusuario'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $repassword = $_POST['repassword'] ?? '';

            // Validar que las contraseñas coincidan
            if ($password !== $repassword) {
                echo "Las contraseñas no coinciden.";
                return;
            }

            // Crear el usuario
            Usuario::crearUsuario($nusuario, $email, $password);
        }
    }
}