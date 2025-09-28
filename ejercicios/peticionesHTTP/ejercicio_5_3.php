<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 apartado 3</title>
</head>
<!-- Crea una página llamada ejercicio_5_3.php que reciba como parámetro (GET) un 
nombre y muestre el texto ‘Bienvenido nombre!!!’ donde nombre será el pasado por 
parámetro.  -->

<body>
    <?php
    $nombre = $_GET['nombre'] ?? 'Sin nombre';
    echo "<p>Bienvenido $nombre!!!";
    ?>
</body>

</html>