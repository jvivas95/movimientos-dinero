<!-- filepath: c:\xampp\htdocs\movimientos-dinero\app\views\layouts\modalAñadirMovimiento.php -->
<!-- Modal Añadir Movimiento -->
<div id="movimientoModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full mx-4">
        <!-- Header del modal -->
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-semibold">Añadir Movimiento</h3>
            <button onclick="cerrarModal()" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Contenido del modal -->
        <div class="p-4">
            <form id="movimientosForm" action="?route=añadirMovimiento" method="POST">
                <div class="mb-4">
                    <label for="tituloMov" class="block text-sm font-medium text-gray-700 mb-2">Título movimiento</label>
                    <input type="text" id="tituloMov" name="tituloMov" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="importe" class="block text-sm font-medium text-gray-700 mb-2">Importe</label>
                    <input type="number" step="0.01" id="importe" name="importe" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="observaciones" class="block text-sm font-medium text-gray-700 mb-2">Observaciones</label>
                    <textarea id="observaciones" name="observaciones" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="cerrarModal()" class="px-4 py-2 text-gray-600 bg-gray-200 rounded-md hover:bg-gray-300">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-emerald-500 text-white rounded-md hover:bg-emerald-700">Añadir</button>
                </div>
            </form>
        </div>
    </div>
</div>