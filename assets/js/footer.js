function toggleListsInMobile() {
    const isMobile = window.innerWidth <= 768; // Modo móvil
    const titles = document.querySelectorAll('.title-footer');

    titles.forEach(title => {
        const ul = title.nextElementSibling;

        // Asegurarse de limpiar event listeners previos
        const clonedTitle = title.cloneNode(true);
        title.replaceWith(clonedTitle);

        // Obtener el nuevo título
        const updatedTitle = ul.previousElementSibling;

        // Añadir comportamiento si estamos en móvil
        if (isMobile) {
            updatedTitle.addEventListener('click', () => {
                ul.classList.toggle('hidden');
            });
        } else {
            // Asegurarse de que todas las listas estén visibles en modo escritorio
            ul.classList.remove('hidden');
        }
    });
}

// Ejecutar la función al cargar la página y al redimensionar
window.addEventListener('load', toggleListsInMobile);
window.addEventListener('resize', toggleListsInMobile);