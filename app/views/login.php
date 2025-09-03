<?php
include_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Login</title>
</head>

<body class="bg-gray-50 flex flex-col items-center justify-center min-h-screen text-slate-800 roboto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col items-center w-full max-w-md mx-auto">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl mb-4 sm:mb-6 lg:mb-7 text-center font-medium">Login</h1>
        <form class="flex flex-col items-center text-base sm:text-lg space-y-3 sm:space-y-4 w-full" method="POST" action="?route=login">
            <input type="hidden" name="action" value="login">
            <div>
                <label for="nusuario" class="text-center block text-sm sm:text-base font-medium mb-2">Nombre de Usuario</label>
                <input
                    class="w-full border border-solid rounded-xl sm:rounded-2xl bg-gray-200 pl-4 pr-4 text-base focus:outline-none focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    type="text"
                    name="nusuario"
                    required>
            </div>
            <div>
                <label for="password" class="text-center block text-sm sm:text-base font-medium mb-2">Contraseña</label>
                <input
                    class="w-full border border-solid rounded-xl sm:rounded-2xl bg-gray-200 pl-4 pr-4 text-base focus:outline-none focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    type="password"
                    name="password"
                    required>
            </div>
            <?php if (isset($_GET['error'])): ?>
                <div class="text-red-700">Usuario o contraseña incorrectos</div>
            <?php endif ?>
            <div class="w-full pt-8 flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4 justify-between">
                <button
                    class="bg-blue-600 hover:bg-blue-700 transition duration-200 text-white text-center font-bold py-2 px-4 rounded-2xl w-full sm:w-auto"
                    type="submit">Iniciar Sesión</button>
                <a
                    href="?route=registro"
                    class="bg-blue-600 hover:bg-blue-700 transition duration-200 text-white text-center font-bold py-2 px-4 rounded-2xl w-full sm:w-auto">Registrarme</a>
            </div>
        </form>
    </div>
</body>

</html>