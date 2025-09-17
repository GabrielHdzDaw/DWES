<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas 1</title>
</head>
<!-- Cadenas. Crea una página llamada cadenas1.php, crea una página php similar a la del 
ejercicio de prueba en la que se defina una variable con una cadena de texto y 
utilizando las funciones de cadena (http://es.php.net/manual/es/ref.strings.php) que 
necesarias, muestra lo siguiente: 
• Elimina los espacios del principio y el final de la cadena si los hubiera. 
• Elimina los caracteres / del principio y el final de la cadena si los hubiera. 
• La variable cadena en mayúsculas, minúsculas y con la primera letra en 
mayúscula y las demás en minúsculas. 
• Muestra el código ascii de la primera letra del nombre. 
• Muestra la longitud del nombre. 
• Muestra el número de veces que aparece la letra a (mayúscula o minúscula). 
• Muestra la posición de la primera a existente en el nombre (sea mayúscula o 
minúscula). Si no hay ninguna mostrará -1. 
• Lo mismo, pero con la última a. 
• Muestra el nombre sustituyendo las letras o por el número cero (sea 
mayúscula o minúscula). 
• Indica si el nombre comienza por “al” o no. 
-->

<body>
    <?php
    $cadena =  "    /la Filigrana del Señor/    ";
    echo "<p>Cadena original: $cadena </p>";
    $cadena = trim($cadena);
    echo "<p>Cadena sin espacios: $cadena </p>";
    $cadena = trim($cadena, "/");
    echo "<p>Cadena sin barras: $cadena </p>";
    $cadena = strtoupper($cadena);
    echo "<p>Cadena en mayúsculas: $cadena </p>";
    $cadena = strtolower($cadena);
    echo "<p>Cadena en minúsculas: $cadena </p>";
    // $cadena = strtoupper($cadena[0]) . substr($cadena, 1);
    $cadena = ucfirst(strtolower($cadena));
    echo "<p>Primera letra en mayúsculas: $cadena </p>";
    echo "<p>Código ascii de la primera letra de la cadena: " . ord($cadena[0]) . "</p>";
    echo "<p>Longitud de la cadena: " . strlen($cadena) . "</p>";
    echo "<p>Número de veces que aparece la letra 'a': " . substr_count($cadena, "a") . "</p>";
    if (!stripos($cadena, "a")) {
        echo "<p>Posición de la primera 'a': -1</p>";
    } else {
        echo "<p>Posición de la primera 'a': " . stripos($cadena, "a") . "</p>";
    }
    echo "<p>Posición de la última 'a': " . strrpos($cadena, "a") . "</p>";
    echo "<p>Sustitución de 'o' por 0: " . str_replace("o", "0", $cadena) . "</p>";
    echo "<p>Comprobar si la cadena empieza por 'al': " . (str_starts_with($cadena, "al") ? "Sí" : "No") . "</p>";
    ?>
</body>

</html>