document.addEventListener('DOMContentLoaded', function() {
    function mostrarCategoria(categoriaId) {
        // Actualizar URL sin recargar la página
        if (!window.location.hash || window.location.hash.slice(1) !== categoriaId) {
            history.pushState(null, '', `#${categoriaId}`);
        }

        // Ocultar todas las secciones
        document.querySelectorAll('.product-section').forEach(section => {
            section.style.display = 'none';
        });

        document.querySelectorAll('.category-link').forEach(link => {
            link.classList.remove('active');
        });

        // Mostrar sección seleccionada
        const seccionActiva = document.getElementById(categoriaId);
        const linkActivo = document.querySelector(`[data-category="${categoriaId}"]`);

        if (seccionActiva && linkActivo) {
            seccionActiva.style.display = 'block';
            linkActivo.classList.add('active');

            // Actualizar breadcrumb
            const breadcrumb = document.querySelector('#breadcrumb-text');
            const categoria = <?php echo json_encode($categorias); ?>[categoriaId.toUpperCase()];

            if (categoria) {
                breadcrumb.textContent = categoria.titulo;
                document.title = `${categoria.titulo} - TRANSFORMETAL`;
            }

            // Guardar en localStorage para mantener la sección activa
            localStorage.setItem('activeSection', categoriaId);

            // Scroll suave sin mover la página hacia arriba
            setTimeout(() => {
                seccionActiva.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 100);
        }
    }

    // Manejador de enlaces de categoría
    document.querySelectorAll('.category-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();  // Previene el desplazamiento no deseado
            const categoria = this.dataset.category;
            mostrarCategoria(categoria);
        });
    });

    // Manejar hash inicial o localStorage
    const initialCategory = window.location.hash.slice(1) ||
        localStorage.getItem('activeSection') ||
        'gabinetes';
    mostrarCategoria(initialCategory);

    // Manejar cambios en el historial
    window.addEventListener('popstate', () => {
        const categoria = window.location.hash.slice(1) || 'gabinetes';
        mostrarCategoria(categoria);
    });
});
