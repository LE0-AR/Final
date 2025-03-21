<?php
if ($connect->connect_error) {
    die("Conexión fallida: " . $connect->connect_error);
}

// Consulta SQL para obtener los usuarios, excluyendo el primer registro (ID=1)
$sql = "SELECT * FROM usuario WHERE id > 2";
$result = $connect->query($sql);
?>

<div class="container">
    <h1 class="titulo">Tabla de Usuarios</h1>

    <div class="newProduct">
        <a type="button" class="btn btn-outline-primary" href="../Views/newUser.php">Nuevo Usuario</a>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nombre</th>
                <th scope="col">Usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Rol</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $contador = 1; // Inicializar contador
            while ($row = $result->fetch_assoc()) { 
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $contador++; ?></th>
                    <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($row['usuario']); ?></td>
                    <td><?php echo htmlspecialchars($row['correo']); ?></td>
                    <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                    <td class="text-center">
                        <?php echo ($row['rol'] === 'Admin') ? 'Administrador' : 'Usuario'; ?>
                    </td>
                    <td class="text-center">
                        <a href="../Views/editUser.php?id=<?php echo $row['id']; ?>" 
                           class="btn btn-outline-warning">Editar</a>
                        <a href="../Model/DeleteUser.php?id=<?php echo $row['id']; ?>" 
                           class="btn btn-outline-danger" 
                           onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                           Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>