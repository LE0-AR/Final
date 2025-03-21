<?php
    require_once "../config/app.php"; 
    include_once "../config/conexion.php";
    include_once "../config/sesion_Ini.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/form.css">
    <?php include_once "../public/autoload/head.php"; ?>
</head>
<body>
   
<?php
    include_once "../public/autoload/header.php";
    include_once "../Views/newsUser.php";
?>
</body>
</html>
