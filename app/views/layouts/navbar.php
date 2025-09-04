<div class="rounded-full ml-4 mr-4 pl-4 pr-4 shadow-lg shadow-green-100 md:hidden">
    <ul class="flex items-center w-full justify-between">

        <!-- AÑADIR MOVIMIENTO -->
        <li class="flex">
            <button type="button" onclick="abrirModalAñadirMovimiento()" class="flex items-center p-2 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48" fill="#006f67">
                    <g fill="none" stroke="#006f67" stroke-linejoin="round" stroke-width="4">
                        <rect width="36" height="36" x="6" y="6" rx="3" />
                        <path stroke-linecap="round" d="M24 16v16m-8-8h16" />
                    </g>
                </svg>
            </button>
        </li>

        <!-- HOME -->
        <li class="flex">
            <a href="?route=dashboard" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#006f67">
                    <g fill="none" stroke="#006f67" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M5 12H3l9-9l9 9h-2M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7" />
                        <path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6" />
                    </g>
                </svg>
            </a>
        </li>

        <!-- LISTA MOVIMIENTOS -->
        <li class="flex">
            <a href="?route=movimientos" class="flex items-center p-2 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="#006f67">
                    <path fill="#006f67" d="M1 4h2v2H1V4zm4 0h14v2H5V4zM1 9h2v2H1V9zm4 0h14v2H5V9zm-4 5h2v2H1v-2zm4 0h14v2H5v-2z" />
                </svg>
            </a>
        </li>


    </ul>
</div>