<?php
include_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/style.css">
    <title>Dashboard</title>
</head>

<body class="flex roboto bg-gray-50 text-slate-800 h-screen">
    <!-- SIDEBAR -->
    <?php include_once(__DIR__ . '/layouts/sidebar.php') ?>
    <!-- CAJA DEL BODY -->
    <div class="flex flex-col w-full h-full">
        <!-- HEADER -->
        <?php include_once(__DIR__ . '/layouts/header.php') ?>
        <!-- CAJA LISTA DE MOVIMIENTOS -->
        <div class="flex flex-col items-center flex-1 bg-gray-400 rounded-2xl m-6 overflow-hidden">
            <!-- TITULO LISTA DE MOVIMIENTOS -->
            <div class="text-4xl pt-5 mb-5">Lista de movimientos</div>
            <!-- CAJA LISTA DE MOVIMIENTOS -->
            <div class="flex flex-col justify-start items-center w-full h-full pl-5 pr-5 pb-5 overflow-y-auto">
                <!-- BUCLE PARA LISTAR MOVIMIENTOS -->
                <?php foreach ($movimientos as $movimiento): ?>
                    <!-- CAJA MOVIMIENTO -->
                    <div class="flex flex-col border border-solid w-full rounded-2xl p-2 pb-5 justify-between mb-1 overflow-y-auto">
                        <div id="fechas"> <?= date('d/m/Y', strtotime($movimiento['created_at'])) ?></div>
                        <div class="flex justify-between">
                            <div class="font-bold">
                                <div id="titulo"> <?= $movimiento['titulo'] ?></div>
                            </div>
                            <div class="">
                                <div id="importe" class="<?= $movimiento['importe'] >= 0 ? 'text-green-500' : 'text-red-600' ?>">
                                    <?= $movimiento['importe'] ?>€</div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- CAJA DEL TOTAL DE MOVIMIENTOS -->
                <div class="flex border border-solid rounded-2xl mt-5 w-full p-1.5">
                    <?php
                    $total = 0;
                    foreach ($movimientos as $movimiento) {
                        $total += $movimiento['importe'];
                    }
                    ?>
                    <div class="flex justify-between items-center w-full px-2">
                        <span class="font-semibold">TOTAL:</span>
                        <div id="importe" class="<?= $total >= 0 ? 'text-green-500' : 'text-red-600' ?>">
                            <?= number_format($total, 2) ?>€
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>