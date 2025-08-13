/**
 * Funciones para manejar el modal de Modificar Movimientos
 */

// Funcion para abrir el modal
function abrirModalModificar() {
  const modal = document.getElementById("modalModificarMovimiento");
  if (modal) {
    modal.classList.remove("hidden");
    document.body.style.overflow = "hidden";

    // Enfocar el primer input
    const firstInput = modal.querySelector('input[type="text"]');
    if (firstInput) {
      setTimeout(() => firstInput.focus(), 100);
    }
  }
}

// Funcion de eventos del modal
function enventoModalAnadirMovimiento() {
  const modal = document.getElementById("modalModificarMovimiento");

  if (modal) {
    // Cerrar modal al hacer clic fuera de él
    modal.addEventListener("click", function (e) {
      if (e.target === modal) {
        cerrarModalAñadirMovimiento();
      }
    });
  }

  // Cerrar modal con tecla Escape
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      const modal = document.getElementById("modalModificarMovimiento");
      if (modal && !modal.classList.contains("hidden")) {
        cerrarModalAñadirMovimiento();
      }
    }
  });
}

// IMPORTANTE: Inicializar eventos cuando el DOM esté listo
document.addEventListener("DOMContentLoaded", function () {
  enventoModalAnadirMovimiento();
});
