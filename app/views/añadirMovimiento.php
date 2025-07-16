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

<body class="flex flex-col items-center justify-center h-screen bg-gray-50 text-slate-800">
    <!--< ?php include_once (__DIR__ . '/layouts/sidebar.php') ?>-->
    <h1 class="text-center  text-5xl pb-8">AÑADIR MOVIMIENTO</h1>
    <main class="">
        <div class="w-auto">
            <div>
                <form class="flex flex-col text-center justify-center items-center space-y-2" action="?route=añadirMovimiento" method="POST">
                    <label class="text-2xl">Título movimiento</label>
                    <input class="text-black border border-solid border-black rounded-2xl w-fit pl-2 bg-white" type="text" name="tituloMov" required>
                    <label class="text-2xl">Importe</label>
                    <input class="text-black border border-solid border-black rounded-2xl pl-2 bg-white" type="number" name="importe" required>
                    <label class="text-2xl">Observaciones</label>
                    <textarea class="text-black border border-solid border-black rounded-2xl p-2.5 bg-white" name="observaciones" rows="4" cols="50"></textarea>
                    <div class="flex justify-between w-full">
                        <button class="text-white p-2 cursor-pointer border border-solid bg-emerald-500 rounded-2xl hover:bg-emerald-700 duration-300" type="submit">AÑADIR</button>
                        <a class="text-white border border-solid h-fit p-2 rounded-2xl bg-blue-600 hover:bg-blue-700 duration-300" type="button" href="?route=dashboard">HOME</a>
                    </div>
                </form>
            </div>
    </main>
</body>

</html>