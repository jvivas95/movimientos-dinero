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
    <title>Login</title>
</head>
<body class="flex roboto bg-gray-600">
    <?php include_once (__DIR__ . '/layouts/sidebar.php') ?>
    <main class="flex flex-col text-center bg-gray-600">
        <div class="w-auto">
        <h1 class="border border-solid">DASHBOARD</h1>
        <div>
            <ul>
                <li>Titulo</li>
            </ul>
        </div>
        </div>
        <a type="button" href="<?php echo APP_URL?>/views/registro.php">Registro</a>
    </main>
</body>
</html>