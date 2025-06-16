<?php

require_once __DIR__ . '../../db.php';

class Usuario
{
    public static function crearUsuario($nusuario, $mail, $password) {
        global $pdo;

        // Verificar si el usuario o mail existe
        $sql = "SELECT nusuario, mail FROM usuario WHERE nusuario = ? OR mail = ? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam("?, ?", $nusuario, $mail);
        $stmt->execute();
    }
}