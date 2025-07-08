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

<body class="flex roboto">
    <?php include_once(__DIR__ . '/layouts/sidebar.php') ?>
    <div class="flex flex-col w-full">
        <div>
            <div>
                <div>Usuario:</div>
                <h1><?php echo $_COOKIE['nusuario'] ?></h1>
            </div>
            <div>
                <div>ID:</div>
                <div><?php echo $_COOKIE['id'] ?></div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center h-v w-full border border-solid">
            <?php foreach ($movimientos as $movimiento): ?>
                <div class="border border-solid">
                    <div><?= $movimiento['titulo'] ?></div>
                    <div><?= $movimiento['importe'] ?>€</div>
                    <div><?= $movimiento['observaciones'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>