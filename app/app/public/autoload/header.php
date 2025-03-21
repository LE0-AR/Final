<div class="aside">
    <div class="logo">
        <a><span></span>TM</a>
    </div>
    <div class="nav-toggler">
        <span></span>
    </div>

    <ul class="nav">
        <li><a href="<?php echo APP_URL; ?>/app/index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="<?php echo APP_URL; ?>/app/Views/usuario.php"><i class="fa fa-user"></i> Usuarios</a></li>
        <li><a href="<?php echo APP_URL; ?>/app/Views/formulario.php"><i class="fa fa-cube"></i> Productos</a></li>
        <li><a href="<?php echo APP_URL; ?>/app/config/sesion_Destroy.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
    </ul>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navToggler = document.querySelector('.nav-toggler');
        const aside = document.querySelector('.aside');

        navToggler.addEventListener('click', function() {
            aside.classList.toggle('open');
            navToggler.classList.toggle('active');
        });

        // Cerrar menú al hacer clic fuera
        document.addEventListener('click', function(event) {
            if (!aside.contains(event.target) && !navToggler.contains(event.target)) {
                aside.classList.remove('open');
                navToggler.classList.remove('active');
            }
        });
    });
</script>