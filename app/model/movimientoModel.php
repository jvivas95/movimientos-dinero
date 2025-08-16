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
        $usuarioId = $datos->getUsuarioId();

        $sql = "INSERT INTO movimiento (titulo, importe, observaciones, usuario_id) VALUES (?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$tituloMov, $importe, $observaciones, $usuarioId]);
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

    public static function borrarMovimientoUsuario($id)
    {
        global $pdo;

        try {
            $sql = "DELETE FROM movimiento WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            error_log("Error al borrar movimiento " . $e->getMessage());
            return false;
        }
    }

    public static function modificarMovimiento($datos)
    {
        global $pdo;

        $idMov = $datos->getId();
        $tituloMov = $datos->getTitulo();
        $importe = $datos->getImporte();
        $observaciones = $datos->getObservaciones();
        $fechaMov = $datos->getCreatedAt();
        $usuarioId = $datos->getUsuarioId();

        $sql = "UPDATE movimiento SET titulo = ?, importe = ?, observaciones = ?,created_at = ?, usuario_id = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$tituloMov, $importe, $observaciones, $fechaMov, $usuarioId, $idMov]);
    }
}
