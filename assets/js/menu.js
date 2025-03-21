document.addEventListener('DOMContentLoaded', function () {
    // Menú de enlace principal y submenú
    const menuItems = [
      { linkId: 'productos-link', submenuId: 'productos-submenu' },
      { linkId: 'industrias-link', submenuId: 'industrias-submenu' },
      { linkId: 'servicios-link', submenuId: 'servicios-submenu' },
      { linkId: 'nosotros-link', submenuId: 'nosotros-submenu' },
    ];
  
    // Agregar eventos para mostrar/ocultar el submenú y ocultar los demás
    menuItems.forEach(({ linkId, submenuId }) => {
      const link = document.getElementById(linkId);
      const submenu = document.getElementById(submenuId);
  
      if (link && submenu) {
        link.addEventListener('click', function (event) {
          event.preventDefault(); // Prevenir comportamiento por defecto
  
          // Ocultar todos los submenús antes de mostrar el actual
          menuItems.forEach(({ submenuId: otherSubmenuId }) => {
            const otherSubmenu = document.getElementById(otherSubmenuId);
            if (otherSubmenu && otherSubmenu !== submenu) {
              otherSubmenu.classList.remove('show'); // Ocultar submenús que no son el seleccionado
            }
          });
  
          // Alternar el submenú seleccionado
          submenu.classList.toggle('show');
        });
      }
    });
  
    // Control de submenús internos en "Productos"
    const mainCategories = document.querySelectorAll('.main-category');
    mainCategories.forEach(mainCategory => {
      mainCategory.addEventListener('click', function (event) {
        event.preventDefault(); // Prevenir comportamiento por defecto
        const submenu = mainCategory.nextElementSibling; // Obtener el submenú correspondiente
  
        // Ocultar otros submenús internos antes de mostrar el actual
        document.querySelectorAll('.nav-submenu.show').forEach(openSubmenu => {
          if (openSubmenu !== submenu) {
            openSubmenu.classList.remove('show'); // Ocultar submenús internos abiertos
          }
        });
  
        // Toggle la visibilidad del submenú actual
        if (submenu && submenu.classList.contains('nav-submenu')) {
          submenu.classList.toggle('show');
        }
      });
    });
  
    // Cerrar cualquier submenú al hacer clic fuera de él
    document.addEventListener('click', function (event) {
      const isClickInsideMenu = event.target.closest('.main-category') || 
                                event.target.closest('.nav-submenu') || 
                                event.target.closest('.menu');
  
      // Si el clic es fuera del menú principal y submenús
      if (!isClickInsideMenu) {
        // Cerrar todos los submenús
        document.querySelectorAll('.nav-submenu.show').forEach(openSubmenu => {
          openSubmenu.classList.remove('show');
        });
  
        // Cerrar submenús principales
        menuItems.forEach(({ submenuId }) => {
          const submenu = document.getElementById(submenuId);
          if (submenu) {
            submenu.classList.remove('show');
          }
        });
      }
    });
  });
  

  /*Para responsivo*/

  
