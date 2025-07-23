/**
 * Funciones para manejar el modal de Añadir Movimientos
 */

// Funcion para abrir el modal
function abrirModal() {
  const modal = document.getElementById("movimientoModal");
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

// Funcion para cerrar el modal
function cerrarModal() {
  const modal = document.getElementById("movimientoModal");
  if (modal) {
    modal.classList.add("hidden");
    document.body.style.overflow = "auto";

    // Limpiar el formulario
    const form = document.getElementById("movimientosForm");
    if (form) {
      form.reset();
    }
  }
}

// Funcion de eventos del modal
function eventosModal() {
  const modal = document.getElementById("movimientoModal");

  if (modal) {
    // Cerrar modal al hacer clic fuera de él
    modal.addEventListener("click", function (e) {
      if (e.target === this) {
        cerrarModal();
      }
    });
  }

  // Cerrar modal con tecla Escape
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      const modal = document.getElementById("movimientoModal");
      if (modal && !modal.classList.contains("hidden")) {
        cerrarModal();
      }
    }
  });
}

// IMPORTANTE: Inicializar eventos cuando el DOM esté listo
document.addEventListener("DOMContentLoaded", function () {
  eventosModal();
});
