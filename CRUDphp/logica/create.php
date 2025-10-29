<?php

    include("db.php");
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

        $sql = "INSERT INTO usuarios(nombre, email, telefono) values ('$nombre', '$email', '$telefono')";
            if($conexion -> query($sql) == TRUE){
                header("Location: ./create.php");
                exit();
            }else{
                echo "Error" . $sql . "<br>" . $conexion -> error;
            }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>Agregar Usuario</title>

</head>
<body>

    <h1>Agregar Usuario</h1>
    <form method="post" action="create.php" >
        <label>Nombre:</label>
        <input type="text" name = "nombre" required> <br>
        <label>Email:</label>
        <input type="email" name = "email" required> <br>
        <label>Teléfono:</label>
        <input type="text" name = "telefono" required> <br>
        <input type="submit" value = "Agregar Usuario">
    </form>
    <br>
    <a href="../index.php">Volver a la lista </a>
    
</body>
</html>