<div class="flex justify-between items-start h-auto ml-8 mr-9 pt-10">
    <div class="w-fit">
        <h1>Hola, <?php echo $_COOKIE['nusuario'] ?></h1>
    </div>
    <div class="md:hidden mb-16 max-w-56">
        <picture>
            <source srcset="<?php echo BASE_URL; ?>/public/assets/images/logo.webp" type="image/webp">
            <img src="<?php echo BASE_URL; ?>/public/assets/images/logo.png" alt="Logo" class="rounded-2xl w-full">
        </picture>
    </div>
    <div class="pt-2">
        <a class="text-white rounded-md bg-rose-500 w-fit p-2 transition-colors hover:bg-rose-700 duration-500" href="?route=logout">
            Cerrar sesión
        </a>
    </div>
</div>