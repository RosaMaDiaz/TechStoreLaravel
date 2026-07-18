// ==========================================
// 🛒 1. MÓDULO DE PRODUCTOS (Carga dinámica y búsqueda)
// ==========================================

// Listado de productos usando las imágenes reales de tu carpeta 'img/'
const listadoProductos = [
    {
        nombre: "Laptop de Alta Gama",
        descripcion: "Laptop potente ideal para desarrollo de software, diseño gráfico y tareas exigentes.",
        precio: 850.00,
        imagen: "img/laptop.jpg"
    },
    {
        nombre: "Monitor UltraWide",
        descripcion: "Monitor de 29 pulgadas ideal para multitarea y diseño visual.",
        precio: 250.00,
        imagen: "img/monitor.jpg"
    },
    {
        nombre: "Teclado Mecánico RGB",
        descripcion: "Teclado con switches ergonómicos y retroiluminación personalizada.",
        precio: 75.00,
        imagen: "img/teclado.jpg"
    },
    {
        nombre: "Mouse Gamer Ergonómico",
        descripcion: "Mouse óptico de alta precisión con botones programables.",
        precio: 45.00,
        imagen: "img/mouse.jpg"
    },
    {
        nombre: "Disco Duro Sólido (SSD) 1TB",
        descripcion: "Almacenamiento ultra rápido para acelerar el inicio del sistema y tus apps.",
        precio: 90.00,
        imagen: "img/ssd.jpg"
    },
    {
        nombre: "Impresora Multifuncional",
        descripcion: "Impresora a color de alta velocidad con conectividad Wi-Fi integrada.",
        precio: 180.00,
        imagen: "img/impresora.jpg"
    }
];

// Función para renderizar los productos en el div id="productos"
function mostrarProductos(productosAFiltrar) {
    const contenedor = document.getElementById('productos');
    if (!contenedor) return; // Si no estamos en la página de productos, salimos

    contenedor.innerHTML = ""; // Limpiar contenido previo

    if (productosAFiltrar.length === 0) {
        contenedor.innerHTML = `<p style="grid-column: 1/-1; text-align: center;">No se encontraron productos que coincidan con tu búsqueda.</p>`;
        return;
    }

    productosAFiltrar.forEach(producto => {
        // Se añade onclick="comprarProducto('Nombre del Producto')" dinámicamente
        const tarjetaHtml = `
            <article class="producto">
                <img src="${producto.imagen}" alt="${producto.nombre}">
                <h3>${producto.nombre}</h3>
                <p>${producto.descripcion}</p>
                <h4>$${producto.precio.toFixed(2)}</h4>
                <button type="button" onclick="comprarProducto('${producto.nombre}')">
                    Comprar
                </button>
            </article>
        `;
        contenedor.innerHTML += tarjetaHtml;
    });
}

// Función que se activa al presionar el botón "Comprar"
function comprarProducto(nombreProducto) {
    alert(`🛒 ¡Felicidades! Has comprado: "${nombreProducto}" con éxito.`);
}

// Función para buscar productos por el input de texto
function buscarProducto() {
    const terminoBusqueda = document.getElementById('buscar').value.toLowerCase().trim();
    
    const productosFiltrados = listadoProductos.filter(producto => {
        return producto.nombre.toLowerCase().includes(terminoBusqueda) || 
               producto.descripcion.toLowerCase().includes(terminoBusqueda);
    });

    mostrarProductos(productosFiltrados);
}

// ==========================================
// 📧 2. MÓDULO DE CONTACTO (Corrección del Formulario)
// ==========================================

function inicializarContacto() {
    const formulario = document.getElementById('resultado');
    if (!formulario) return; // Si no estamos en la página de contacto, salimos

    formulario.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que la página se recargue[cite: 6]

        const nombre = document.getElementById('nombre').value.trim();
        const correo = document.getElementById('correo').value.trim();
        const asunto = document.getElementById('asunto').value.trim();
        const mensaje = document.getElementById('mensaje').value.trim();

        // Validación básica
        if (nombre === "" || correo === "" || asunto === "" || mensaje === "") {
            alert("⚠️ Por favor, completa todos los campos del formulario.");
            return;
        }

        alert(`📧 ¡Gracias ${nombre}! Hemos recibido tu mensaje sobre "${asunto}". Nos comunicaremos contigo a ${correo} muy pronto.`);
        formulario.reset();
    });
}

// ==========================================
// 🔄 3. INICIALIZACIÓN AL CARGAR LA PÁGINA
// ==========================================
document.addEventListener("DOMContentLoaded", () => {
    // Renderiza la lista completa al abrir productos.html
    mostrarProductos(listadoProductos);

    // Activa la escucha del formulario en contactos.html
    inicializarContacto();
});