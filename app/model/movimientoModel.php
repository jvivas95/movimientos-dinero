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
}
