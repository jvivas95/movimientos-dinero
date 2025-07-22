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

<body class="roboto bg-gray-50 text-slate-800 h-screen flex">
    <!-- LAYOUT DESKTOP: sidebar + header + main content + footer -->
    <div class="md:flex w-full h-full">
        <!-- SIDEBAR -->
        <div class="flex-shrink-0 hidden md:block">
            <?php include_once(__DIR__ . '/layouts/sidebar.php') ?>
        </div>
        <!-- MAIN CONTENT -->
        <div class="flex flex-col flex-1 h-full">
            <!-- HEADER -->
            <div class="sticky top-0 bg-gray-50">
                <?php include_once(__DIR__ . '/layouts/header.php') ?>
            </div>
            <!-- CAJA LISTA DE MOVIMIENTOS -->
            <div class="flex flex-col items-center flex-1 rounded-2xl m-6">
                <!-- TITULO LISTA DE MOVIMIENTOS -->
                <div class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl mb-4 sm:mb-6 lg:mb-7 text-center font-medium">Lista de movimientos</div>
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
                        <!-- CAJA IMPORTE TOTAL -->
                        <div class="flex justify-between items-center w-full px-2">
                            <span class="font-semibold">TOTAL:</span>
                            <div id="importe" class="<?= $total >= 0 ? 'text-green-500' : 'text-red-600' ?>">
                                <?= number_format($total, 2) ?>€
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER MOBILE -->
            <div class="sticky bottom-0 block md:hidden flex-shrink-0 bg-black text-white">
                <?php include_once(__DIR__ . '/layouts/footer.php') ?>
            </div>
        </div>
    </div>
</body>

</html>