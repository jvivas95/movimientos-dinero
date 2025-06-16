<?php

require_once __DIR__ . '../../db.php';

class usuarioModel
{
    public static function crearUsuario($nusuario, $mail, $password)
    {
        global $pdo;

        // Verificar si el usuario o mail existe
        $sql = "SELECT nusuario, mail FROM usuario WHERE nusuario = ? OR mail = ? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nusuario, $mail]);
        if ($stmt->fetch()) {
            return false;
        }

        // Crear nuevo usuario
        $sql = "INSERT INTO usuario (nusuario, mail, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$nusuario, $mail, $passwordHash]);
    }
}
