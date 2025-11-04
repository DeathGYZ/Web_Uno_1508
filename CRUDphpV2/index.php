<?php
    include("./logica/db.php");       
    $consulta = "SELECT * FROM usuarios";
    $result = $conexion -> query($consulta);
    include ("./logica/headerP.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">      
    <title>Lista de Usuarios</title>
</head>
    <body>
        <div class="container">
        <h1 class="header center orange-text">Usuarios</h1>
        <table border = 1px>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            <?php while ($row = $result -> fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["telefono"]; ?></td>
                    <td>
                        <a href="./logica/update.php?id=<?php echo $row["id"]; ?>">Editar</a>
                        <a href="./logica/delete.php?id=<?php echo $row["id"]; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
            <br><br>
        </div>
    </body>
</html>

<?php  
    include ("./logica/footerP.php");
?>