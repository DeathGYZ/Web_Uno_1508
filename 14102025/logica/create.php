<?php

    include('./db.php');
    $nombre= $_GET['nombre'];
    $email= $_GET['email'];
    $telefono= $_GET['telefono'];

    $sql = "INSERT INTO usuarios(nombre, email, telefono) value ('$nombre', '$email', '$telefono')";
        if($conexion -> query($sql) == true){
            header("Location: ../registro.html");
            exit();
        }else{
            echo "Error".$sql."<br>".$conexion -> error;
        }
    

?>