document.querySelectorAll('.nav-menu a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();  // Evita el comportamiento predeterminado de los enlaces

        const targetId = this.getAttribute('href').substring(1);  // Obtén el ID de la sección destino
        const targetSection = document.getElementById(targetId);

        // Desplázate hacia la sección con un margen adicional
        targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'  // Cambia 'start' por 'end' si deseas llegar al final de la sección
        });

        // Si tienes un header fijo, podrías agregar un desplazamiento extra
        window.scrollBy(0, -50);  // Ajusta -50 a la altura de tu header
    });
});
/*nav */