/*Secciones*/
function showSection(sectionId) {
    var sections = document.getElementsByClassName("section");
    for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove("active");
        sections[i].style.display = "none";  // Mantener el estilo "display" para ocultar secciones
    }
    
    var sectionToShow = document.getElementById(sectionId);
    if (sectionToShow) {
        sectionToShow.style.display = "block";  // Mostrar la sección antes de aplicar la clase
        setTimeout(function() {
            sectionToShow.classList.add("active");
        }, 10);  // Retraso pequeño para permitir que la transición ocurra
    }
}

function checkHash() {
    var hash = window.location.hash;
    if (hash) {
        showSection(hash.substring(1));
    } else {
        showSection("section1");
    }
}

window.onhashchange = function () {
    checkHash();
};

document.addEventListener('DOMContentLoaded', function () {
    checkHash();
});

