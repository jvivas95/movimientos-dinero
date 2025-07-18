<?php

require_once __DIR__ . '/../../db.php';

class usuarioModel
{
    public static function crearUsuario($datos)
    {
        global $pdo;

        $nUsuario = $datos->getNUsuario();
        $email = $datos->getEmail();
        $password = $datos->getPassword();
 
        // Verificar si el usuario o email existe
        $sql = "SELECT nusuario, email FROM usuario WHERE nusuario = ? OR email = ? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nUsuario, $email]);
        if ($stmt->fetch()) {
            return false;
        }

        // Crear nuevo usuario
        $sql = "INSERT INTO usuario (nusuario, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$nUsuario, $email, $passwordHash]);
    }

    public static function login ($datos)
    {
        global $pdo;

        $nUsuario = $datos->getNUsuario();
        $password = $datos->getPassword();

        /*
        // Verificar si el usuario existe
        $sql = "SELECT * FROM usuario WHERE nusuario = ? or email = ? LIMIT 1";
        */
        $sql = "SELECT * FROM usuario WHERE nusuario = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nUsuario]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        //return var_dump($usuario); -> Verificar el contenido del array $usuario


        if ($usuario && isset($usuario["PASSWORD"]) && password_verify($password, $usuario["PASSWORD"]))
        {
            return $usuario;
        }
        else
        {
            return false;
        }
        

        //echo var_dump($usuario);

        /*
        if ($usuario && password_verify($password, $usuario["password"]))
        {
            return true;                
        }
        else
        {
            return false;
        }
            */
    }

    public static function logout()
    {
        session_destroy();
        setcookie('nusuario', '', time() - 3600); // Eliminar cookie
        setcookie('id', '', time() - 3600); // Eliminar cookie
        return true;

    }
}