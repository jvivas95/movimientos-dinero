/**
 * Funciones para manejar el modal de un Movimiento
 */

// Nueva función para abrir modal con datos específicos
function abrirModalMovimiento(id, titulo, importe, fecha, observaciones) {
  const modal = document.getElementById("modalMovimiento");
  if (modal) {
    // Actualizar contenido del modal
    const modalFecha = modal.querySelector("#fechas");
    const modalTitulo = modal.querySelector("#titulo");
    const modalImporte = modal.querySelector("#importe");
    const modalId = modal.querySelector("#movimiento-id");
    const modalObservaciones = modal.querySelector("#observaciones");

    if (modalFecha) modalFecha.textContent = fecha;
    if (modalTitulo) modalTitulo.textContent = titulo;
    if (modalImporte) {
      modalImporte.textContent = importe + "€";
      modalImporte.className = importe >= 0 ? "text-green-500" : "text-red-600";
    }
    if (modalId) modalId.textContent = id;
    if (modalObservaciones) modalObservaciones.textContent = observaciones;

    // Asignar el ID al campo oculto del formulario
    document.getElementById("hidden-movimiento-id").value = id;

    modal.classList.remove("hidden");
    document.body.style.overflow = "hidden";
  }
}

// Funcion para cerrar el modal
function cerrarModal() {
  const modal = document.getElementById("modalMovimiento");
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
  const modal = document.getElementById("modalMovimiento");

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
      const modal = document.getElementById("modalMovimiento");
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
