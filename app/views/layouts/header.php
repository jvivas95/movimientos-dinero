<div class=" text-white flex justify-between h-auto p-3">
    <div class="w-fit p-1">
        <h1>Hola, <?php echo $_COOKIE['nusuario'] ?></h1>
    </div>
    <div class="border border-solid rounded-md bg-purple-400 p-1 w-fit transition-colors hover:bg-purple-500 duration-500">
        <a href="?route=añadirMovimiento">
            Cerrar sesión
        </a>
    </div>
</div>