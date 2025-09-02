<div class="flex h-screen items-stretch">
    <nav class="flex flex-col w-fit h-screen p-5">
        <div class="mt-2.5 mb-16 max-w-56">
            <picture>
                <source srcset="<?php echo BASE_URL; ?>/public/assets/images/logo.webp" type="image/webp">
                <img src="<?php echo BASE_URL; ?>/public/assets/images/logo.png" alt="Logo" class="rounded-2xl w-40">
            </picture>
        </div>
        <div class="w-fit text-base">
            <ul class="flex flex-col">
                <li class="flex items-center gap-2">
                    <button type="button" onclick="abrirModalAñadirMovimiento()" class="flex items-center p-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-library-plus flex-shrink-0">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 3m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                            <path d="M4.012 7.26a2.005 2.005 0 0 0 -1.012 1.737v10c0 1.1 .9 2 2 2h10c.75 0 1.158 -.385 1.5 -1" />
                            <path d="M11 10h6" />
                            <path d="M14 7v6" />
                        </svg>
                        <div class="pl-2">Añadir movimiento</div>
                    </button>
                </li>
                <li class="flex items-center gap-2">
                    <a type="button" href="?route=movimientos" class="flex items-center p-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-library-plus flex-shrink-0">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 6l11 0" />
                            <path d="M9 12l11 0" />
                            <path d="M9 18l11 0" />
                            <path d="M5 6l0 .01" />
                            <path d="M5 12l0 .01" />
                            <path d="M5 18l0 .01" />
                        </svg>
                        <div class="pl-2">Todos los movimientos</div>
                    </a>
                </li>
                <li class="flex items-center gap-2">
                    <a type="button" href="?route=dashboard" class="flex items-center p-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-library-plus flex-shrink-0">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                        <div class="pl-2">Todos los movimientos</div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="w-px h-full bg-black "></div>
</div>