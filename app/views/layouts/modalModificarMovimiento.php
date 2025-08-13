<!-- filepath: c:\xampp\htdocs\movimientos-dinero\app\views\layouts\modalAñadirMovimiento.php -->
<!-- Modal Añadir Movimiento -->
<div id="modalModificarMovimiento" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full mx-4">
        <!-- Header del modal -->
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-semibold">Nuevos datos del Movimiento</h3>
            <button onclick="cerrarModal()" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Contenido del modal -->
        <div class="">
            <div class="border border-gray-200 rounded-lg p-4 space-y-3">
                <!-- Fecha -->
                <div>
                    <div>Fecha</div>
                    <input type="date" id="fechas" class="text-sm text-gray-600 border border-solid rounded-md" placeholder=""></input>
                </div>

                <!-- ID del movimiento (oculto por defecto) -->
                <div id="movimiento-id" class="hidden text-xs text-gray-400"></div>

                <!-- Título e Importe -->
                <div class="flex flex-col items-start space-y-3">
                    <div class="flex-1">
                        <div>Titulo</div>
                        <input id="titulo" class="font-bold text-lg border border-solid rounded-lg" type="text"></input>
                    </div>
                    <div class="">
                        <div>Importe</div>
                        <input id="importe" class="font-semibold text-lg border border-solid rounded-lg w-full" type="number"></input>
                    </div>
                </div>

                <!-- Observaciones -->
                <div class="border-b pb-3">
                    <h4 class="font-medium text-gray-700 mb-2">Observaciones:</h4>
                    <textarea id="observaciones" class="text-gray-600 border border-solid rounded-lg w-full" type="text" placeholder="Modificar"></textarea>
                </div>
            </div>
        </div>

        <!-- Footer del modal -->
        <form method="POST" action="?route=borrarMovimiento" class="pt-3">
            <input type="hidden" name="id" id="hidden-movimiento-id" value="">
            <div class="flex justify-between w-full pl-10 pr-10 pb-3.5">
                <a type="submit" class="md:block text-white p-2 cursor-pointer border border-solid bg-rose-500 rounded-2xl hover:bg-rose-700 duration-300" href="?route=dashboard">Cancelar</a>
                <a class="md:block text-white border border-solid h-fit p-2 rounded-2xl bg-yellow-400 hover:bg-yellow-600 duration-300" type="button" href="?route=dashboard">Modificar</a>
            </div>
        </form>
    </div>
</div>