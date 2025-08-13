<?php

include_once __DIR__ . '/../app/helpers/isAuthenticated.php';

// Obtener la ruta solicitada, por ejemplo: /login, /dashboard, etc.
$route = $_GET['route'] ?? 'login';

// Definir las rutas y los archivos que deben cargarse
switch ($route) {

    // REGISTRO
    case 'registro':

        // Comprobar si el usuario está autenticado
        if (isAuthenticated()) {

            // Si el usuario ya se ha autenticado, se le redirige al dashboard
            header(("Location:?route=dashboard"));
            exit();
        }

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

    // LOGIN
    case 'login':

        // Comprobar si el usuario está autenticado
        if (isAuthenticated()) {

            // Si el usuario ya se ha autenticado, se le redirige al dashboard
            header("Location:?route=dashboard");
            exit();
        }

        // Comprobar si el método es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once(__DIR__ . '/../app/controller/AuthController.php');
            $loginUsuario = new AuthController();
            $loginUsuario->login();
        } else {
            require_once __DIR__ . '/../app/views/login.php';
        }
        break;

    // LOGOUT
    case 'logout':

        require_once __DIR__ . '/../app/controller/AuthController.php';
        $logoutUsuario = new AuthController();
        $logoutUsuario->logout();
        break;

    // DASHBOARD
    case 'dashboard':

        // Comprobar si el usuario está autenticado
        if (!isAuthenticated()) {
            // Si no lo está redirige al usuario al login
            header("Location:?route=login");
            exit();
        }

        require_once __DIR__ . '/../app/controller/MovimientoController.php';
        $todosMovimientos = new MovimientoController();
        $movimientos = $todosMovimientos->mostrarTodosMovimientos();

        require_once __DIR__ . '/../app/views/dashboard.php';
        break;

    // AÑADIR MOVIMIENTO
    case 'añadirMovimiento':

        // Comprobar si el usuario está autenticado
        if (!isAuthenticated()) {

            // Si no está autenticado, se le redirige al login
            header("Location:?route=login");
            exit();
        }

        // Comprobar si el método es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once(__DIR__ . '/../app/controller/MovimientoController.php');
            $crearMovimiento = new MovimientoController();
            $crearMovimiento->crearMovimiento();
        } else {
            require_once __DIR__ . '/../app/views/añadirMovimiento.php';
        }

        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        }

        break;

    // BORRAR MOVIMIENTO
    case 'borrarMovimiento':

        //Comprobar s iel usuario está autenticado
        if (!isAuthenticated()) {

            // Si no está autenticado, se le redirige al login
            header("Location:?route=login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../app/controller/MovimientoController.php';
            $borrarMovimiento = new MovimientoController();
            $borrarMovimiento->borrarMovimientoUsuario();
        } else {
            header("Location:?route=dashboard");
            exit();
        }
        break;

    default:
        // Página no encontrada
        require_once __DIR__ . '/../app/views/404.php';
        break;
}
