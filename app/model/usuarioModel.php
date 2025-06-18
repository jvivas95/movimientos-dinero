<?php

require_once __DIR__ . '../../db.php';

class usuarioModel
{
    public static function crearUsuario($nusuario, $email, $password)
    {
        global $pdo;

        // Verificar si el usuario o email existe
        $sql = "SELECT nusuario, email FROM usuario WHERE nusuario = ? OR email = ? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nusuario, $email]);
        if ($stmt->fetch()) {
            return false;
        }

        // Crear nuevo usuario
        $sql = "INSERT INTO usuario (nusuario, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$nusuario, $email, $passwordHash]);
    }
}
