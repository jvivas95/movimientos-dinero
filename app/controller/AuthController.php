<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/../entities/Usuario.php');
require_once(__DIR__ . '/../model/usuarioModel.php');



class AuthController
{

    // Función para registrar un nuevo usuario
    public function registro()
    {
        $nUsuario = $_POST['nusuario'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $repassword = $_POST['repassword'] ?? '';

        // Validar que las contraseñas coincidan
        if ($password !== $repassword) {
            echo "<script>alert('Las contraseñas no coinciden.'); window.history.back();</script>";
            return;
        }

        // Crear el usuario

        $datos = new Usuario(
            null,
            $nUsuario,
            $email,
            $password,
            null
        );

        $resultadoCrearUsuario = usuarioModel::crearUsuario($datos);

        if ($resultadoCrearUsuario) {
            header("Location: ?route=dashboard");
            echo "<script>alert('Usuario registrado exitosamente.');</script>";
            exit();
        } else {
            echo "<script>alert('El usuario o correo ya existe.'); window.history.back();</script>";
        }
    }

    public function login()
    {
        $nUsuario = $_POST['nusuario'] ?? '';
        $password = $_POST['password'] ?? '';

        $datos = new Usuario(
            null,
            $nUsuario,
            null,
            $password,
            null
        );

        $resultadoLogin = usuarioModel::login($datos);
        if ($resultadoLogin) {

            // Set de una cookie para la sesión del usuario
            setcookie('nusuario', $resultadoLogin['nusuario'], time() + 3600); // 1 hora
            setcookie('id', $resultadoLogin['id'], time() + 3600);

            // Redirigir al usuario al dashboard
            return header("Location:?route=dashboard");
        } else {
            header("Location:?route=login&error=1");
            exit();
        }
    }

    public function logout()
    {
        $resultadoLogout = usuarioModel::logout();
        if ($resultadoLogout == true) {
            return header("Location:?route=login");
        }
    }
}

/*

    // Verificación de que el AuthController está recibiendo los datos del formulario

$nusuario = $_POST['nusuario'];
$email = $_POST['email'];
$password = $_POST['password'];

echo''.$nusuario.''.$email.''.$password.'';
*/