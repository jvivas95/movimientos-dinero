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
<body class="bg-gray-50 flex flex-col items-center justify-center h-screen text-slate-800 roboto">
    <div class="flex flex-col items-center w-96 h-auto">
        <img>
        <h1 class="text-7xl mb-7">Login</h1>
        <form class="flex flex-col items-center text-lg space-y-2 w-full" method="POST" action="?route=login">
            <input type="hidden" name="action" value="login">
            <label for="nusuario">Nombre de Usuario</label>
            <input
                class="border border-solid rounded-2xl bg-gray-200 pl-4"
                type="text"
                name="nusuario"
                required
            >
            <label for="password">Contraseña</label>
            <input
                class="border border-solid rounded-2xl bg-gray-200 pl-4"
                type="password"
                name="password"
                required
            >
        <div class="w-full pt-8 flex justify-between">
            <button 
                class="bg-blue-600 hover:bg-blue-700 transition duration-200 text-white font-bold py-2 px-4 rounded-2xl"
                type="submit"
                >Iniciar Sesión</button>
            <a href="?route=registro" class="bg-blue-600 hover:bg-blue-700 transition duration-200 text-white font-bold py-2 px-4 rounded-2xl">Registrarme</a>
        </div>
        </form>
    </div>
</body>
</html>