<?php

$nombre_get = $_POST['nombre'];
$primerApellido_get = $_POST['primerApellido'];

$nombreCompleto = $nombre_get." ".$primerApellido_get;

echo($nombreCompleto);

?>