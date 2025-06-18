<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('./../');
$dotenv->load();

try {

    $pdo = new PDO(
        "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log(("Conexión exitosa a la base de datos: " . $_ENV['DB_NAME']), 0);

} catch (PDOException $e) {
    error_log("Error al conectar a la base de datos: " . $e->getMessage());
    die("Error al conectar a la base de datos: ");
}
