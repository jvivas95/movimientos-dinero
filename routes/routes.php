<?php

// Obtener la ruta solicitada, por ejemplo: /login, /dashboard, etc.
$route = $_GET['route'] ?? 'login';

// Definir las rutas y los archivos que deben cargarse
switch ($route) {
    case 'registro':

        // Comprobar si el método de solicitud es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once(__DIR__ . '/../app/controller/AuthController.php');
            $regUsuario = new AuthController();
            $regUsuario->registro();
        }

        // Cargar la vista de registro
        else {
            require_once(__DIR__ . '/../app/views/registro.php');
        }

        //require_once __DIR__ . '/../app/views/registro.php';
        break;
    case 'login':

        // Comprobar si el método es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once(__DIR__ . '/../app/controller/AuthController.php');
            $loginUsuario = new AuthController();
            $loginUsuario->login();
        } else {
            require_once __DIR__ . '/../app/views/login.php';
        }
        break;
    case 'dashboard':
        require_once __DIR__ . '/../app/views/dashboard.php';
        break;
    case 'añadirMovimiento':

        // Comprobar si el método es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once(__DIR__ . '/../app/controller/MovimientoController.php');
            $crearMovimiento = new MovimientoController();
            $crearMovimiento->crearMovimiento();
        } else {
            require_once __DIR__ . '/../app/views/añadirMovimiento.php';
        }
        break;
    default:
        // Página no encontrada
        require_once __DIR__ . '/../app/views/404.php';
        break;
}
