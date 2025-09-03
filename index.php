<?php
// Cargar el autoload de Composer
require_once __DIR__ . '/vendor/autoload.php';
include_once __DIR__ .'/config.php';

use Dotenv\Dotenv;

// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

// Iniciar sesión
session_start();

// Mostrar página de inicio
require_once __DIR__ . '/routes/routes.php';