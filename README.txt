npx tailwindcss -i ./public/assets/css/tailwind.css -o ./public/assets/css/style.css --watch

¡Perfecto! Aquí tienes un ejemplo completo para que el formulario de "Añadir movimiento" se abra en un modal y se envíe mediante AJAX, sin recargar la página. Este ejemplo está pensado para integrarse fácilmente con tu proyecto PHP.

---

## 1. Cambia el enlace del sidebar

En tu archivo `app/views/layouts/sidebar.php`, reemplaza el enlace:

```php
<a href="?route=añadirMovimiento">Añadir movimiento</a>
```

por:

```php
<a href="#" id="openModal">Añadir movimiento</a>
```

---

## 2. Agrega el HTML del modal (puede ir al final del archivo)

```php
<!-- Modal para añadir movimiento -->
<div id="modalMovimiento" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:1000;">
  <div style="background:#fff; color:#000; padding:2rem; border-radius:8px; min-width:320px; position:relative;">
    <button id="closeModal" style="position:absolute; top:10px; right:10px; font-size:2rem; background:none; border:none;">&times;</button>
    <h2>Añadir Movimiento</h2>
    <form id="formMovimiento">
      <div>
        <label>Monto:</label>
        <input type="number" name="monto" required>
      </div>
      <div>
        <label>Descripción:</label>
        <input type="text" name="descripcion" required>
      </div>
      <button type="submit">Guardar</button>
    </form>
    <div id="mensajeForm" style="color:green; margin-top:10px; display:none;"></div>
  </div>
</div>
```

---

## 3. Agrega el JavaScript para el modal y el envío AJAX

Antes de cerrar tu `<body>`, o en un archivo JS incluido, pon:

```html
<script>
document.addEventListener('DOMContentLoaded', function() {
  const openBtn = document.getElementById('openModal');
  const modal = document.getElementById('modalMovimiento');
  const closeBtn = document.getElementById('closeModal');
  const form = document.getElementById('formMovimiento');
  const mensajeForm = document.getElementById('mensajeForm');

  openBtn.addEventListener('click', function(e) {
    e.preventDefault();
    modal.style.display = 'flex';
  });

  closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
    mensajeForm.style.display = 'none';
    form.reset();
  });

  window.addEventListener('click', function(e) {
    if(e.target === modal) {
      modal.style.display = 'none';
      mensajeForm.style.display = 'none';
      form.reset();
    }
  });

  form.addEventListener('submit', function(e){
    e.preventDefault();
    const formData = new FormData(form);
    fetch('ruta/del/backend/para/guardar_movimiento.php', { // Cambia esto por tu ruta real
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(data => {
      if(data.success){
        mensajeForm.textContent = 'Movimiento guardado correctamente';
        mensajeForm.style.display = 'block';
        setTimeout(() => {
          modal.style.display = 'none';
          mensajeForm.style.display = 'none';
          form.reset();
          location.reload(); // Opcional, para refrescar la lista de movimientos
        }, 1500);
      } else {
        mensajeForm.textContent = 'Error: ' + (data.error || 'No se pudo guardar');
        mensajeForm.style.color = 'red';
        mensajeForm.style.display = 'block';
      }
    })
    .catch(() => {
      mensajeForm.textContent = 'Se produjo un error de red';
      mensajeForm.style.color = 'red';
      mensajeForm.style.display = 'block';
    });
  });
});
</script>
```

---

## 4. Backend PHP para recibir el AJAX

Crea el archivo `guardar_movimiento.php` (ajusta la ruta en el fetch) y añade algo como esto:

```php
<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monto = $_POST['monto'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    // Validaciones y guardado en la base de datos aquí...
    // Simulación:
    if ($monto && $descripcion) {
        // Aquí tu lógica para guardar
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Datos incompletos']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Método no permitido']);
}
```

---

### ¡Listo!  
Con estos pasos, tendrás un modal funcional que envía el formulario de manera asíncrona, sin redirecciones.  
¿Te gustaría adaptar los campos del formulario? ¿O necesitas ayuda con la parte del guardado en base de datos?
