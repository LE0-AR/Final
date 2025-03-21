document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("headerSearch");

    // Capturamos el evento 'Enter' cuando se presiona la tecla Enter
    searchInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault();  // Prevenir la acción por defecto (como enviar el formulario)

            const searchQuery = searchInput.value.trim(); // Obtener el término de búsqueda

            if (searchQuery) {
                // Redirigir a la página de resultados con el parámetro de búsqueda
                window.location.href = `busqueda.php?q=${encodeURIComponent(searchQuery)}`;
            }
        }
    });

    // El código para filtrar en tiempo real permanece igual
    searchInput.addEventListener("input", function () {
        const filter = searchInput.value.toLowerCase();

        // Filtrar en los enlaces del menú
        document.querySelectorAll(".menu a").forEach(link => {
            const text = link.textContent ? link.textContent.toLowerCase() : '';
            if (text.includes(filter)) {
                link.parentElement.classList.remove("hidden");
                link.parentElement.classList.add("visible");
            } else {
                link.parentElement.classList.remove("visible");
                link.parentElement.classList.add("hidden");
            }
        });

        // Filtrar en los productos de las secciones
        document.querySelectorAll(".product-item").forEach(product => {
            const searchText = product.getAttribute("data-search") ? product.getAttribute("data-search").toLowerCase() : '';
            if (searchText.includes(filter)) {
                product.classList.remove("hidden");
                product.classList.add("visible");
            } else {
                product.classList.remove("visible");
                product.classList.add("hidden");
            }
        });

        // Filtrar las secciones completas (si tiene productos visibles)
        document.querySelectorAll(".section").forEach(section => {
            const productsInSection = section.querySelectorAll(".product-item");
            const hasVisibleProducts = Array.from(productsInSection).some(product => !product.classList.contains("hidden"));

            if (hasVisibleProducts) {
                section.style.display = "block";  // Sección visible si hay productos
            } else {
                section.style.display = "none";  // Sección oculta si no hay productos
            }
        });
    });
});
