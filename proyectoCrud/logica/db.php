<?php

//local
$host = 'localhost:3306';
$user = 'root';
$password = '1234';
$dbname = 'crud_app';

/*
//hosting
    $host = 'sql113.infinityfree.com';
    $user = 'if0_40185846';  
    $password = 'nEICu24MeqneFB';
    $dbname = 'if0_40185846_ico';
*/

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}

?>