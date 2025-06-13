<?php

// Ruta que redirige a la página de inicio (LOGIN)
$route = $_GET['route'] ?? 'login';

// Enrutador
switch ($route) {
    case 'login':
        require_once __DIR__ . '/app/views/login.php';
        break;
    case 'registro':
        require_once __DIR__ . '/app/views/registro.php';
        break;
    default:
        // Redirección por defecto si la página no existe
        echo("404 - Página no encontrada");
}