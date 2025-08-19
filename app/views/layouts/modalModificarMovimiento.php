<!-- filepath: c:\xampp\htdocs\movimientos-dinero\app\views\layouts\modalAñadirMovimiento.php -->
<!-- Modal Añadir Movimiento -->
<div id="modalModificarMovimiento" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full mx-4">
        <!-- Header del modal -->
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-semibold">Nuevos datos del Movimiento</h3>
            <button onclick="cerrarModalModificar()" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Contenido del modal -->
        <form id="modalModificarForm" method="POST" action="?route=modificarMovimiento" class="pt-3">
            <div class="">
                <div class="border border-gray-200 rounded-lg p-4 space-y-3">
                    <!-- Fecha -->
                    <div>
                        <input type="text" id="movimiento-id-modificar" name="movimiento-id-modificar" value="" class="border border-solid hidden">
                        <div>Fecha</div>
                        <input id="fecha-modificar" name="fecha-modificar" type="date" class="text-lg border border-solid rounded-md" placeholder=""></input>
                    </div>

                    <!-- Título e Importe -->
                    <div class="flex flex-col items-start space-y-3">
                        <div class="flex-1">
                            <div>Titulo</div>
                            <input id="titulo-modificar" name="titulo-modificar" class="text-lg border border-solid rounded-lg pl-2" type="text" placeholder=""></input>
                        </div>
                        <div class="">
                            <div>Importe</div>
                            <input id="importe-modificar" name="importe-modificar" class="text-lg border border-solid rounded-lg w-full pl-2" type="number" placeholder=""></input>
                        </div>
                    </div>

                    <!-- Observaciones -->
                    <div class="border-b pb-3">
                        <div class="font-medium text-gray-700 mb-2">Observaciones:</div>
                        <textarea id="observaciones-modificar" name="observaciones-modificar" class="border border-solid text-lg rounded-lg w-full pl-2" type="text" placeholder=""></textarea>
                    </div>
                </div>
            </div>

            <!-- Footer del modal -->
            <div class="flex justify-between w-full pl-10 pr-10 pb-3.5 pt-3.5">
                <a type="" class="md:block text-white p-2 cursor-pointer border border-solid bg-rose-500 rounded-2xl hover:bg-rose-700 duration-300" href="?route=dashboard">Cancelar</a>
                <button class="md:block text-white border border-solid h-fit p-2 rounded-2xl bg-yellow-400 hover:bg-yellow-600 duration-300" type="submit">Modificar</button>
            </div>
        </form>
    </div>
</div>