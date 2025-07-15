<div class="flex justify-between h-auto p-3">
    <div class="w-fit p-1">
        <h1>Hola, <?php echo $_COOKIE['nusuario'] ?></h1>
    </div>
    <div class="border border-solid rounded-md bg-blue-400 p-1 w-fit transition-colors hover:bg-sky-800 duration-500">
        <a href="?route=logout">
            Cerrar sesión
        </a>
    </div>
</div>