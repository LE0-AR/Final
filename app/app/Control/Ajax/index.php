<?php
//llamar al archivo validar para verificar si esta activo el inicio de sesión
include "validar.php";
header("Location: ../../index.php");
exit();
?>