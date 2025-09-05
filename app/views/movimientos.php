<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Lista movimiento</title>
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
                <!-- NAVBAR MOBILE -->
                <?php include_once(__DIR__ . '/layouts/navbar.php') ?>
            </div>
            <!-- CAJA LISTA DE MOVIMIENTOS -->
            <div class="flex flex-col items-center flex-1 rounded-2xl m-6">
                <!-- TITULO LISTA DE MOVIMIENTOS -->
                <div class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl mb-4 sm:mb-6 lg:mb-7 text-center font-medium">Lista de movimientos</div>
                <!-- CAJA LISTA DE MOVIMIENTOS -->
                <div class="flex flex-col justify-start items-center w-full h-full pl-5 pr-5 pb-5 overflow-y-auto">
                    <!-- CAJA DEL TOTAL DE MOVIMIENTOS -->
                    <div class="flex border border-solid rounded-2xl mt-3 mb-5 w-full p-1.5">
                        <?php
                        $total = 0;
                        foreach ($movimientos as $movimiento) {
                            $total += $movimiento['importe'];
                        }
                        ?>
                        <!-- CAJA IMPORTE TOTAL -->
                        <div class="flex justify-between items-center w-full px-2">
                            <span class="font-semibold">TOTAL:</span>
                            <div class="<?= $total >= 0 ? 'text-green-500' : 'text-red-600' ?>">
                                <?= number_format($total, 2) ?>€
                            </div>
                        </div>
                    </div>
                            <div class="flex flex-col justify-center items-center mt-5">
                                <?php if ($total == 0) : ?>
                                    <div>No hay movimientos registrados</div>
                                    <div class="mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="#006f67"><path fill="none" stroke="#006f67" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v.01M10 6h1.499l4.5-3v3.803A6.019 6.019 0 0 1 18.657 10h1.341a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-1.342c-.057.16-.12.318-.19.472M16.999 17v1.5a1.5 1.5 0 0 1-3 0v-.583a6.04 6.04 0 0 1-1 .083h-4a6.04 6.04 0 0 1-1-.083v.583a1.5 1.5 0 0 1-3 0v-2.027a6 6 0 0 1 1.5-9.928M3 3l18 18"/></svg>
                                    </div>
                                <?php endif; ?>
                            </div>
                    <!-- BUCLE PARA LISTAR MOVIMIENTOS -->
                    <?php foreach ($movimientos as $movimiento): ?>
                        <!-- CAJA MOVIMIENTO -->
                        <div onclick="abrirModalMovimiento(<?= $movimiento['id'] ?>, '<?= addslashes($movimiento['titulo']) ?>', '<?= $movimiento['importe'] ?>', '<?= date('d/m/Y', strtotime($movimiento['created_at'])) ?>', '<?= $movimiento['observaciones'] ?>')"
                            class="flex flex-col border border-solid w-full rounded-2xl p-2 pb-5 justify-between mb-1 overflow-y-auto cursor-pointer hover:bg-gray-50">
                            <div> <?= date('d/m/Y', strtotime($movimiento['created_at'])) ?></div>
                            <div></div>
                            <div class="flex justify-between">
                                <div class="font-bold">
                                    <div> <?= $movimiento['titulo'] ?></div>
                                </div>
                                <div class="">
                                    <div class="importe-<?= $index ?> <?= $movimiento['importe'] >= 0 ? 'text-green-500' : 'text-red-600' ?>">
                                        <?= $movimiento['importe'] ?>€</div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/layouts/modalMovimiento.php' ?>
    <script src="/assets/js/modalMovimiento.js"></script>
    <?php include_once __DIR__ . '/layouts/modalAñadirMovimiento.php' ?>
    <script src="/assets/js/modalAñadirMovimiento.js"></script>
    <?php include_once __DIR__ . '/layouts/modalModificarMovimiento.php' ?>
    <script src="/assets/js/modalModificarMovimiento.js"></script>



</body>

</html>