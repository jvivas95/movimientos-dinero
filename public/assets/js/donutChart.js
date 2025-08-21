const ctx = document.getElementById("donutChart").getContext("2d"); // Obtiene el contexto del canvas donde se dibuja la gráfica

const datos = {
  labels: ["Ingresos", "Gastos"], // Etiquetas para cada segmento del gráfico
  datasets: [
    {
      data: [
        ingresos.reduce((a, b) => a + b, 0), // Suma todos los ingresos
        gastos.reduce((a, b) => a + b, 0), // Suma todos los gastos
      ],
      backgroundColor: ["#22c55e", "#ef4444"], // Colores para ingresos (verde) y gastos (rojo)
    },
  ],
};

new Chart(ctx, {
  type: "doughnut", // Tipo de gráfico: dona
  data: datos, // Datos y configuración
  options: {
    responsive: true,
    plugins: {
      legend: { position: "bottom" },
    },
  },
});
