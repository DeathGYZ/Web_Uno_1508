<?php

    $host = 'sql103.infinityfree.com';
    $user = 'if0_40222527';
    $password = 'jptACTO10It22Py';
    $dbname = 'if0_40222527_ico';

    $conexion = new mysqli($host, $user, $password, $dbname);

    if($conexion -> connect_error){
        die('Error en la conexión a la DB: '.$conexion -> connect_error);
    }else{
        echo 'Conexión Realizada';
    }
    
?>