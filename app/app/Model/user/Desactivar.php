<?php
require_once "../../config/conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consulta para actualizar el estado
    $sql = "UPDATE productos SET estado = 'Inactivo' WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>
            alert('Producto eliminar correctamente');
            window.location.href = '../../Views/user/ProductUser.php';
        </script>";
    } else {
        echo "<script>
            alert('Error al eliminar el producto');
            window.location.href = '../../Views/user/ProductUser.php';
        </script>";
    }
    
    $stmt->close();
} else {
    header("Location: ../../Views/user/ProductUser.php");
}

$connect->close();
?>