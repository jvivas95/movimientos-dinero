<?php
// filepath: /var/www/html/movimientos-dinero/index.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro</title>
</head>

<body class="bg-purple-950 flex flex-col items-center justify-center h-screen text-white roboto">
    <div class="flex flex-col items-center w-96 h-auto">
        <img>
        <h1 class="text-7xl mb-7">Registrarme</h1>
        <form class="flex flex-col items-center text-lg space-y-2 w-full" action="index.php?route=registro" method="POST">
            <label for="nusuario">Nombre de Usuario</label>
            <input
                class="border border-solid rounded-2xl bg-blue-200 pl-4"
                type="text"
                name="nusuario"
                required>
            <label for="mail">Correo electrónico</label>
            <input
                class="border border-solid rounded-2xl bg-blue-200 pl-4"
                type="text"
                name="email"
                required>
            <label for="password">Contraseña</label>
            <input
                class="border border-solid rounded-2xl bg-blue-200 pl-4"
                type="password"
                name="password"
                required>
            <label for="repassword">Repetir contraseña</label>
            <input
                class="border border-solid rounded-2xl bg-blue-200 pl-4"
                type="password"
                name="repassword"
                required>
            <div class="w-full pt-8 flex justify-between">
                <button
                    class="bg-indigo-600 hover:bg-indigo-700 transition duration-200 text-white font-bold py-2 px-4 rounded-2xl"
                    type="submit">Registrarme</button>
                <a
                    href="index.php?route=login"
                    class="bg-indigo-600 hover:bg-indigo-700 transition duration-200 text-white font-bold py-2 px-4 rounded-2xl">
                    Ya tienes cuenta?</a>
            </div>
        </form>
    </div>
</body>

</html>