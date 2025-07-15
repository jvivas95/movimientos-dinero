<div class="flex justify-between h-auto p-3">
    <div class="w-fit p-1">
        <h1>Hola, <?php echo $_COOKIE['nusuario'] ?></h1>
    </div>
    <div class=" p-2 rounded-md bg-red-400 w-fit transition-colors hover:bg-red-500 duration-500">
        <a href="?route=añadirMovimiento">
            Cerrar sesión
        </a>
    </div>
</div>