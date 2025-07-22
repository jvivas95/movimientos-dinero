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
    <title>Añadir movimiento</title>
</head>

<body class="roboto flex flex-col min-h-screen bg-gray-50 text-slate-800">
    <!-- LAYOUT AÑADIR MOVIMIENTO: sidebar + header + main content + footer -->
    <div class="md:flex flex-1 w-full">
        <!-- SIDEBAR -->
        <div class="flex-shrink-0 hidden md:block">
            <?php include_once(__DIR__ . '/layouts/sidebar.php') ?>
        </div>
        <!-- MAIN CONTENT -->
        <div class="flex flex-col flex-1">
            <!-- HEADER -->
            <div>
                <?php include_once(__DIR__ . '/layouts/header.php') ?>
            </div>
            <!-- CAJA AÑADIR MOVIMIENTO -->
            <div class="flex flex-col m-6 flex-1">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl mb-4 sm:mb-6 lg:mb-7 text-center font-medium">AÑADIR MOVIMIENTO</h1>
                <form class="flex flex-col items-center text-base sm:text-lg space-y-3 sm:space-y-4 w-full" action="?route=añadirMovimiento" method="POST">
                    <label class="text-center block text-sm sm:text-base font-medium mb-2">Título movimiento</label>
                    <input class="w-full border border-solid rounded-xl sm:rounded-2xl bg-gray-200 pl-4 pr-4 text-base focus:outline-none focus:ring-blue-500 focus:border-transparent transition-all duration-200" type="text" name="tituloMov" required>
                    <label class="text-center block text-sm sm:text-base font-medium mb-2">Importe</label>
                    <input class="w-full border border-solid rounded-xl sm:rounded-2xl bg-gray-200 pl-4 pr-4 text-base focus:outline-none focus:ring-blue-500 focus:border-transparent transition-all duration-200" type="number" name="importe" required>
                    <label class="text-center block text-sm sm:text-base font-medium mb-2">Observaciones</label>
                    <textarea class="w-full border border-solid rounded-xl sm:rounded-2xl bg-gray-200 pl-4 pr-4 text-base focus:outline-none focus:ring-blue-500 focus:border-transparent transition-all duration-200" name="observaciones" rows="4" cols="50"></textarea>
                    <div class="flex justify-between w-full pl-10 pr-10">
                        <button class="md:block text-white p-2 cursor-pointer border border-solid bg-emerald-500 rounded-2xl hover:bg-emerald-700 duration-300" type="submit">AÑADIR</button>
                        <a class="md:block text-white border border-solid h-fit p-2 rounded-2xl bg-blue-600 hover:bg-blue-700 duration-300" type="button" href="?route=dashboard">HOME</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FOOTER MOBILE - Ahora está fuera del contenedor principal -->
    <div class="block md:hidden mt-auto bg-black text-white">
        <?php include_once(__DIR__ . '/layouts/footer.php') ?>
    </div>
</body>

</html>