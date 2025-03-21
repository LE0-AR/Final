document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll("img");
  
    images.forEach(img => {
      const src = img.getAttribute("src");
      img.setAttribute("data-src", src); // Mueve el src a data-src
      img.removeAttribute("src"); // Elimina el src para hacer lazy loading
    });
  
    const lazyLoad = (image) => {
      const src = image.getAttribute("data-src");
      if (!src) return;
      image.setAttribute("src", src); // Vuelve a agregar el src cuando sea necesario
      image.removeAttribute("data-src");
    };
  
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          lazyLoad(entry.target);
          observer.unobserve(entry.target);
        }
      });
    });
  
    images.forEach(image => {
      imageObserver.observe(image);
    });
  });
  