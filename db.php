<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
    $dotenv->load();
    //var_dump($_ENV); // Solo para depuración temporal
} catch (Exception $e) {
    die('Error cargando Dotenv: ' . $e->getMessage());
}

try {
    $pdo = new PDO(
        "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8mb4",
        $_ENV['DB_USER'],
        $_ENV['DB_PASS']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log(("Conexión exitosa a la base de datos: " . $_ENV['DB_NAME']), 0);

} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
