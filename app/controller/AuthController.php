<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/../model/usuarioModel.php');



class AuthController
{

    // Función para registrar un nuevo usuario
    public function registro()
    {
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
            header("Location: ?route=dashboard");
            echo "<script>alert('Usuario registrado exitosamente.');</script>";
            exit();
        } else {
            echo "<script>alert('El usuario o correo ya existe.'); window.history.back();</script>";
        }
    }

    public function login()
    {
        $nusuario = $_POST['nusuario'] ?? '';
        $password = $_POST['password'] ?? '';
        $resultado = usuarioModel::login($nusuario, $password);
        if ($resultado) {

            // Set de una cookie para la sesión del usuario
            setcookie('nusuario', $nusuario, time() + 3600); // 1 hora

            // Redirigir al usuario al dashboard
            return header("Location:?route=dashboard");
        } else {
            echo "<script>alert('Error en el login');</script>";
        }
    }
}

/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $controller = new AuthController();

    switch ($action)
    {
        case 'login':
            $controller->login();
            break;
        case 'registro':
            $controller->registro();
            break;
        default:
        echo "Acción no válida";
    }
}
    */

/*

    // Verificación de que el AuthController está recibiendo los datos del formulario

$nusuario = $_POST['nusuario'];
$email = $_POST['email'];
$password = $_POST['password'];

echo''.$nusuario.''.$email.''.$password.'';
*/