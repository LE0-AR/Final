document.addEventListener("DOMContentLoaded", () => {
    // Seleccionar todos los botones de cierre
    const closeButtons = document.querySelectorAll(".close-button");

    // Seleccionar todos los modales
    const modals = document.querySelectorAll(".custom-modal");

    // Agregar eventos a los botones de cierre
    closeButtons.forEach(button => {
        button.addEventListener("click", () => {
            const modal = button.closest(".custom-modal");
            if (modal) {
                closeModal(modal.id);
            }
        });
    });

    // Cerrar modal al hacer clic fuera del contenido
    modals.forEach(modal => {
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                closeModal(modal.id);
            }
        });
    });

    // Función para abrir un modal por su ID
    window.openModal = (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "flex";
        }
    };

    // Función para cerrar un modal por su ID
    window.closeModal = (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "none";
        }
    };
});

/*Video de animacion*/
// Seleccionar elementos
const gridItems = document.querySelectorAll('.grid-item');
const modal = document.getElementById('videoModal');
const iframe = modal.querySelector('iframe');
const closeButton = modal.querySelector('.close-button');

// Función para abrir el modal y cargar el video
gridItems.forEach(item => {
    item.addEventListener('click', () => {
        const videoUrl = item.getAttribute('data-video');
        iframe.src = videoUrl; // Carga el video en el iframe
        modal.style.display = 'flex'; // Muestra el modal
    });
});

// Función para cerrar el modal
closeButton.addEventListener('click', () => {
    modal.style.display = 'none'; // Oculta el modal
    iframe.src = ''; // Detiene el video
});

// Cerrar modal al hacer clic fuera del contenido
modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none'; // Oculta el modal
        iframe.src = ''; // Detiene el video
    }
});
