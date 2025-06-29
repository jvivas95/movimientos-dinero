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
    <title>Dashboard</title>
</head>
<body class="flex roboto">
    <?php include_once (__DIR__ . '/layouts/sidebar.php') ?>
    <main class="flex flex-col text-center w-full h-full bg-black">
        <div class="w-auto">
        <h1 class="border border-solid">DASHBOARD</h1>
        <div>
            <div id="contenedorMovimiento">
                <div id="tituloMovimiento">Aqui va el titutlo</div>
                <div id="importe">Aquí va el importe del movimiento</div>
            </div>
        </div>
    </main>
</body>
</html>