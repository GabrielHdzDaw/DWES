<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_GET['nombre'] ?? 'Sin nombre';
        $clase = $_GET['clase'] ?? 'Sin clase';

        echo "<p>Nombre: $nombre";
        echo "<p>Clase: $clase";
    ?>
</body>
</html>