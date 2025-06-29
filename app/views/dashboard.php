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
    <div class="flex justify-center items-center h-screen w-full border border-solid">
        <div class="border border-solid w-fit">
            <div class="border border-solid">
                <h1>DASHBOARD</h1>
            </div>
            <div class="border border-solid">
                Titulo
            </div>
            <div class="border border-solid">
                Importe
            </div>
        </div>
    </div>
</body>

</html>