<!-- ===== INICIO DE PHP ===== -->
<?php

$nombre_get = "Julio";
$primerApellido_get = "Camargo";

echo($nombre_get);
echo('<h1>'.$primerApellido_get.'</h1>');

$nombreCompleto = $nombre_get." ".$primerApellido_get;
echo($nombreCompleto);

?>
<!-- ===== FIN DE PHP ===== -->


<!-- ===== INICIO DE HTML ===== -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h2>Hola Mundo</h2>
    <h4><?php echo($nombreCompleto) ?></h4>
 </body>
 </html>
 <!-- ===== FIN DE HTML ===== -->