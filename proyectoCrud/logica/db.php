<?php
$host = 'localhost:3306';
$user = 'root';  // Cambia esto si tu usuario de MySQL es diferente
$password = '1234';  // Deja vacío si no tienes contraseña configurada
$dbname = 'crud_app';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
