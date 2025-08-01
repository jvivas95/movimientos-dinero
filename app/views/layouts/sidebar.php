<nav class="flex flex-col w-fit h-screen p-5">
    <div class="mt-2.5 mb-16 max-w-56">
        <picture>
            <source srcset="<?php echo BASE_URL; ?>/public/assets/images/logo.webp" type="image/webp">
            <img src="<?php echo BASE_URL; ?>/public/assets/images/logo.png" alt="Logo" class="rounded-2xl w-full">
        </picture>
    </div>
    <div class="border border-solid w-fit">
        <ul class="flex flex-col">
            <li class="flex items-center gap-2 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-library-plus flex-shrink-0">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 3m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                    <path d="M4.012 7.26a2.005 2.005 0 0 0 -1.012 1.737v10c0 1.1 .9 2 2 2h10c.75 0 1.158 -.385 1.5 -1" />
                    <path d="M11 10h6" />
                    <path d="M14 7v6" />
                </svg>
                <a href="?route=añadirMovimiento" class="whitespace-nowrap">Añadir movimiento</a>
            </li>
        </ul>
    </div>
</nav>