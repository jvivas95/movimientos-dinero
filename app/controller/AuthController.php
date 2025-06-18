<?php

require_once (__DIR__ . '/../model/usuarioModel.php');

class AuthController
{

    // Función para registrar un nuevo usuario
    public function registro()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nusuario = $_POST['nusuario'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $repassword = $_POST['repassword'] ?? '';

            // Validar que las contraseñas coincidan
            if ($password !== $repassword) {
                echo "<script>alert('Las contraseñas no coinciden.'); window.history.back();</script>";
                return;
            }

            // Crear el usuario
            $resultado = usuarioModel::crearUsuario($nusuario, $email, $password);

            if ($resultado) {
                echo "<script>alert('Usuario registrado correctamente.'); window.location.href= 'index.php?route=login';</script>";
            } else {
                echo "<script>alert('El usuario o correo ya existe.'); window.history.back();</script>";
            }
        }
    }
}
