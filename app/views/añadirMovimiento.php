<?php
include_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/public/assets/css/style.css">
    <title>Añadir movimiento</title>
</head>
<body class="flex flex-col items-center justify-center h-screen bg-purple-900 text-white">
    <!--< ?php include_once (__DIR__ . '/layouts/sidebar.php') ?>-->
    <h1 class="text-center  text-5xl pb-6">AÑADIR MOVIMIENTO</h1>
    <main class="">
        <div class="w-auto">
        <div>
            <form class="flex flex-col text-center justify-center items-center" action="?route=añadirMovimiento" method="POST">
                <label class="">Título movimiento</label>
                <input class="border border-solid border-black rounded-2xl w-fit pl-2" type="text" name="tituloMov" required>
                <label>Importe</label>
                <input class="border border-solid border-black rounded-2xl pl-2" type="number" name="importe" required>
                <label>Observaciones</label>
                <textarea class="border border-solid border-black rounded-2xl p-2.5" name="observaciones" rows="4" cols="50"></textarea>
                <button class="border border-solid border-black rounded-2xl" type="submit">Añadir</button>
            </form>
        </div>
        <a type="button" href="?route=dashboard">HOME</a>
    </main>
</body>
</html>