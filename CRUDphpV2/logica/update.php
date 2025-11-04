<?php
    include("db.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conexion -> query($sql);
    $row  = $result -> fetch_assoc();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

        $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', telefono = '$telefono' WHERE id=$id";
        
        if($conexion -> query($sql) === TRUE){
            header("Location: ../index.php");
            exit();
        }else{
            echo "Error: " . $sql . "<br>" . $conexion -> error;
        }
    }
    include ("headerS.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
        <h1 class="header center orange-text">Editar Usuario</h1>
        <form method="post" action="update.php?id=<?php echo $id; ?>">
            <label>Nombre:</label>
            <input type="text" name = "nombre" value = "<?php echo $row["nombre"]; ?>" required> <br>
            <label>Email:</label>
            <input type="email" name = "email" value = "<?php echo $row["email"]; ?>" required> <br>
            <label>Teléfono:</label>
            <input type="text" name = "telefono" value = "<?php echo $row["telefono"]; ?>" required> <br> <br>
            <input type="submit" value = "Actualizar Usuario" class="btn">
        </form>
        <br>
        <a href="../index.php" class="btn">Volver a la lista </a>
        <br><br>
    </div>
</body>
</html>

<?php  
    include ("footerS.php");
?>