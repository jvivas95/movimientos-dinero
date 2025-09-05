const ctx = document.getElementById("donutChart").getContext("2d");

// Manejar arrays vacíos correctamente
const totalIngresos = ingresos.length > 0 ? ingresos.reduce((a, b) => a + b, 0) : 0;
const totalGastos = gastos.length > 0 ? gastos.reduce((a, b) => a + b, 0) : 0;
const tieneMovimientos = totalIngresos > 0 || totalGastos > 0;

const datos = {
  labels: tieneMovimientos ? ["Ingresos", "Gastos"] : ["Sin movimientos"],
  datasets: [
    {
      data: tieneMovimientos ? [totalIngresos, totalGastos] : [1],
      backgroundColor: tieneMovimientos ? ["#22c55e", "#ef4444"] : ["#d1d5db"],
      borderWidth: 0
    },
  ],
};

new Chart(ctx, {
  type: "doughnut",
  data: datos,
  options: {
    responsive: true,
    plugins: {
      legend: { 
        position: "bottom",
        labels: {
          color: tieneMovimientos ? '#374151' : '#9ca3af'
        }
      },
      tooltip: {
        enabled: tieneMovimientos
      }
    },
  },
});
