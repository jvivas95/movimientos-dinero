<div class="flex justify-between h-auto p-3 pt-9">
    <div class="w-fit p-1">
        <h1>Hola, <?php echo $_COOKIE['nusuario'] ?></h1>
    </div>
    <div class="text-white rounded-md bg-rose-500 p-1 w-fit transition-colors hover:bg-rose-700 duration-500">
        <a href="?route=logout">
            Cerrar sesión
        </a>
    </div>
</div>