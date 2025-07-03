<?php

require_once __DIR__ . '/../entities/Movimiento.php';
require_once __DIR__ . '/../../db.php';

class movimientoModel
{
    public static function crearMovimiento($datos)
    {
        global $pdo;

        $tituloMov = $datos->getTitulo();
        $importe = $datos->getImporte();
        $observaciones = $datos->getObservaciones();

        $sql = "INSERT INTO movimiento (titulo, importe, observaciones) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$tituloMov, $importe, $observaciones]);
    }

    public static function obtenerTodosMovimientos()
    {
        global $pdo;

        $sql = "SELECT * FROM movimiento";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function obtenerMovimientosUsuario($id)
    {
        global $pdo;

        $usuarioId = $id->getId();

        $sql = "SELECT * FROM movimiento WHERE usuario_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$usuarioId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}
