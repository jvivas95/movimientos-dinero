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
        <form class="flex flex-col items-center text-lg space-y-2 w-full" method="post">
            <label for="nusuario">Nombre de Usuario</label>
            <input
                class="border border-solid rounded-2xl bg-blue-200 pl-4"
                type="text"
                name="nusuario"
                required
            >
            <label for="password">Contraseña</label>
            <input
                class="border border-solid rounded-2xl bg-blue-200 pl-4"
                type="password"
                name="password"
                required
            >
        <div class="w-full pt-8 flex justify-between">
            <button 
                class="bg-indigo-600 hover:bg-indigo-700 transition duration-200 text-white font-bold py-2 px-4 rounded-2xl"
                type="submit"
                >Iniciar Sesión</button>
            <a href="index.php?route=registro" class="bg-indigo-600 hover:bg-indigo-700 transition duration-200 text-white font-bold py-2 px-4 rounded-2xl">Registrarme</a>
        </div>
        </form>
    </div>
</body>
</html>