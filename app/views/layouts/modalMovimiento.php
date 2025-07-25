<!-- filepath: c:\xampp\htdocs\movimientos-dinero\app\views\layouts\modalAñadirMovimiento.php -->
<!-- Modal Añadir Movimiento -->
<div id="modalMovimiento" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full mx-4">
        <!-- Header del modal -->
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-semibold">Detalle del Movimiento</h3>
            <button onclick="cerrarModal()" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col border border-solid w-full rounded-2xl p-4 pb-5 justify-between mb-1">
            <div id="fechas" class="text-gray-600 mb-2"></div>
            <div id="movimiento-id" class="hidden text-xs text-gray-400 mb-2">ID: </div>
            <div class="flex justify-between">
                <div class="font-bold">
                    <div id="titulo"></div>
                </div>
                <div class="">
                    <div id="importe" class="font-semibold"></div>
                </div>

            </div>
        </div>
        <div class="border-t pt-3">
            <h4>observaciones:</h4>
            <div id="observaciones"></div>
        </div>
    </div>
</div>