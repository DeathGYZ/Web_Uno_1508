<?php
    //Almacenar variables donde se tiene informacion de la base de datos

    $host = '127.0.0.1:3306';
    $user = 'root';
    $password = '1234';
    $dbname = 'crud_app';

    $conexion = new mysqli($host, $user, $password, $dbname);

    if($conexion -> connect_error){
        die('Error en la conexión a la DB: '.$conexion -> connect_error);
    }else{
        echo 'Conexión Realizada';
    }
?>