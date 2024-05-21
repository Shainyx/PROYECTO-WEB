// Seleccionar el contenedor y los botones de registro e inicio de sesión
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

// Agregar un event listener para el botón de registro
registerBtn.addEventListener('click', () => {
    // Agregar la clase "active" al contenedor para mostrar el formulario de registro
    container.classList.add("active");
});

// Agregar un event listener para el botón de inicio de sesión
loginBtn.addEventListener('click', () => {
    // Remover la clase "active" del contenedor para mostrar el formulario de inicio de sesión
    container.classList.remove("active");
});

// Función para mostrar la fecha y hora actual
function mostrarFechaHora() {
    // Obtener el elemento donde se mostrará la fecha y hora
    var fechaHoraElemento = document.getElementById('fecha-hora');
    // Crear un nuevo objeto Date para obtener la fecha y hora actual
    var fechaHora = new Date();
    // Obtener la fecha formateada en formato localizado para español
    var fecha = fechaHora.toLocaleDateString('es-ES', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    // Obtener la hora formateada en formato localizado para español
    var hora = fechaHora.toLocaleTimeString('es-ES', { hour: 'numeric', minute: 'numeric', second: 'numeric' });

    // Actualizar el contenido del elemento con la fecha y hora actual
    fechaHoraElemento.textContent = fecha + ' - ' + hora;
}




