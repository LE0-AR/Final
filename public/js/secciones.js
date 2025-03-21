function showProduct(productId) {
    var products = document.getElementsByClassName("product");
    for (var i = 0; i < products.length; i++) {
      products[i].style.display = "none";
    }
    var productToShow = document.getElementById(productId);
    if (productToShow) {
      productToShow.style.display = "block";
    }
  }

  function checkHash() {
    var hash = window.location.hash;
    if (hash) {
      showProduct(hash.substring(1));
    } else {
      showProduct("product1");
    }
  }

  window.onhashchange = function() {
    checkHash();
  };

  function cerrarYRedirigir(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado
    // Guarda la posición de scroll actual
    const scrollPosition = window.scrollY;

    // Cambia el hash sin mover el scroll
    window.history.pushState(null, null, "productos.php#section6");

    // Restablece el scroll a la posición guardada
    setTimeout(() => {
      window.scrollTo(0, scrollPosition);
    }, 0);
  }

  function habilitarScroll() {
    document.body.classList.remove('scroll-ini'); // Quita la clase que bloquea el scroll

    // Remueve el evento de escucha después de la primera interacción
    window.removeEventListener('scroll', habilitarScroll);
    window.removeEventListener('wheel', habilitarScroll);
    window.removeEventListener('touchmove', habilitarScroll);
  }

  // Detecta la primera interacción del usuario para habilitar el scroll
  window.addEventListener('scroll', habilitarScroll, {
    once: true
  });
  window.addEventListener('wheel', habilitarScroll, {
    once: true
  });
  window.addEventListener('touchmove', habilitarScroll, {
    once: true
  });