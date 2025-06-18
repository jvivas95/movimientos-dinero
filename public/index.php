<?php
// Cargar el autoload de Composer
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Iniciar sesión
session_start();

// Mostrar página de inicio
include_once (__DIR__ . '/../app/views/dashboard.php');