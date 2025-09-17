<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas 2</title>
</head>
<!-- Cadenas. De forma similar al ejercicio anterior, crea una página llamada cadenas2.php 
y a partir de una variable que contenga una url: 
$url = 'http://username:password@hostname:9090/path?arg=value#anchor'; 
Utiliza la función parse_url para extraer de la url las siguientes partes: 
• El protocolo utilizado (en el ejemplo http). 
• El nombre de usuario (en el ejemplo username). 
• El path de la url (en el ejemplo /path) 
• El querystring de la url (en el ejemplo arg=value)  -->
<body>
    <?php
        $url = 'http://username:password@hostname:9090/path?arg=value#anchor'; 
        echo "<p>$url</p>";
        echo "<p>Protocolo utilizado: " . parse_url($url)["scheme"];
        echo "<p>Nombre de usuario: " . parse_url($url)["user"];
        echo "<p>Path de la url: " . parse_url($url)["path"];
        echo "<p>Query de la url: " . parse_url($url)["query"];
    ?>
</body>
</html>