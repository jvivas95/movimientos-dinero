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
<body class="flex flex-col items-center justify-center h-screen">
    <!--< ?php include_once (__DIR__ . '/layouts/sidebar.php') ?>-->
    <main class="border border-solid">
        <div class="w-auto">
        <h1 class="border border-solid text-center">AÑADIR MOVIMIENTO</h1>
        <div>
            <form class="flex flex-col" action="?route=añadirMovimiento" method="POST">
                <label>Título movimiento</label>
                <input class="border border-solid" type="text" name="tituloMov" required>
                <label>Importe</label>
                <input class="border border-solid" type="number" name="importe" required>
                <label>Observaciones</label>
                <textarea class="border border-solid" name="observaciones" rows="4" cols="50"></textarea>
                <button class="border border-solid" type="submit">Añadir</button>
            </form>
        </div>
        <a type="button" href="?route=dashboard">HOME</a>
    </main>
</body>
</html>