<?php

require_once __DIR__ . '/../../db.php';

class movimientoModel
{
    public static function crearMovimiento($tituloMov, $importe, $observaciones)
    {
        global $pdo;

        $sql = "INSERT INTO movimiento (titulo, importe, observaciones) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$tituloMov, $importe, $observaciones]);
    }
}
