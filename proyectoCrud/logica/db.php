<?php

    /*Local BD*/
    $host = 'localhost:3306';
    $user = 'root';
    $password = '1234';
    $dbname = 'crud_app';
    
    /*
    $host = 'sql103.infinityfree.com';
    $user = 'if0_40222527';
    $password = 'jptACTO10It22Py';
    $dbname = 'if0_40222527_ico';*/

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die('Error en la conexión: ' . $conn->connect_error);
    }

?>