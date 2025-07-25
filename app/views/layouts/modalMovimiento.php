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

        <!-- Contenido del modal -->
        <div class="p-4">
            <div class="border border-gray-200 rounded-lg p-4 space-y-3">
                <!-- Fecha -->
                <div id="fechas" class="text-sm text-gray-600"></div>

                <!-- ID del movimiento (oculto por defecto) -->
                <div id="movimiento-id" class="hidden text-xs text-gray-400"></div>

                <!-- Título e Importe -->
                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <div id="titulo" class="font-bold text-lg"></div>
                    </div>
                    <div class="ml-4">
                        <div id="importe" class="font-semibold text-lg"></div>
                    </div>
                </div>

                <!-- Observaciones -->
                <div class="border-t pt-3">
                    <h4 class="font-medium text-gray-700 mb-2">Observaciones:</h4>
                    <div id="observaciones" class="text-gray-600"></div>
                </div>
            </div>
        </div>

        <!-- Footer del modal (opcional) -->
        <div class="flex justify-end p-4 border-t">
            <button onclick="cerrarModal()" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                Cerrar
            </button>
        </div>
    </div>
</div>