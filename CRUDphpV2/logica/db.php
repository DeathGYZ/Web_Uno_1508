<?php
    $host = 'localhost:3306';
    $user = 'root';
    $password = '1234';
    $dbname = 'crud_app';
    
    $conexion = new mysqli($host, $user, $password, $dbname);
    if($conexion -> connect_error){
        die('Error en la conexión a la DB: '.$conexion -> connect_error);
    }
?>