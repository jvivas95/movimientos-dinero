<div class="flex justify-between items-center ml-8 mr-8 pt-10 pb-6">
    <div class="hidden sm:block">
        <h1>Hola, <?php echo $_COOKIE['nusuario'] ?></h1>
    </div>
    <div class="md:hidden w-auto">
        <picture>
            <source srcset="/assets/images/logoM.webp" type="image/webp">
            <img src="/assets/images/logoM.png" alt="Logo" class="rounded-full w-4">
        </picture>
    </div>
    <div class="">
        <a class="text-[8px] sm:text-lg text-white rounded-md bg-rose-500 p-2 transition-colors hover:bg-rose-700 duration-500" href="?route=logout">
            Cerrar sesión
        </a>
    </div>
</div>