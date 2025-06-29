<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/../model/movimientoModel.php');



class MovimientoController
{

    // Función para registrar el movimiento
    public function crearMovimiento()
    {
        $tituloMov = $_POST["tituloMov"] ?? '';
        $importe = $_POST["importe"] ?? '';
        $observaciones = $_POST["observaciones"] ?? '';

        $resultadoCrearMovimiento = movimientoModel::crearMovimiento($tituloMov, $importe, $observaciones);

        if ($resultadoCrearMovimiento) {
            header("Location: ?route=dashboard");
        } else {
            echo "<script>alert('error'); window.history.back();</script>";
        }
    }
}
