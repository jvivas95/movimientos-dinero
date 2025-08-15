/**
 * Funciones para manejar el modal de Modificar Movimientos
 */

// Funcion para abrir el modal
function abrirModalModificar(id, fecha, titulo, importe, observaciones) {
  const modal = document.getElementById("modalModificarMovimiento");
  if (modal) {
    modal.classList.remove("hidden");
    document.body.style.overflow = "hidden";
  }
  document.getElementById("movimiento-id-modificar").value = id;
  // Convertir fecha de DD/MM/YYYY a YYYY-MM-DD
  let fechaFormateada = fecha;
  if (/^\d{2}\/\d{2}\/\d{4}$/.test(fecha)) {
    const partes = fecha.split("/");
    fechaFormateada = `${partes[2]}-${partes[1]}-${partes[0]}`;
  }

  // Asignar la fecha al input type="date"
  const inputFecha = document.querySelector('input[type="date"]');
  if (inputFecha) {
    inputFecha.value = fechaFormateada;
  }
  document.getElementById("titulo-modificar").placeholder = titulo;
  document.getElementById("importe-modificar").placeholder = importe;
  document.getElementById("observaciones-modificar").placeholder =
    observaciones;
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
