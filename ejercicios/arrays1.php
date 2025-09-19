<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 1</title>
</head>
<!-- • Crea un array con los nombres de varios alumnos de la clase incluyendo el 
tuyo. 
• Muestra el número de elementos que tiene el array. 
• Crea una cadena que contenga los nombres de los alumnos existentes en el 
array separados por un espacio y muéstrala. 
• Muestra el array en un orden aleatorio distinto al que lo creaste. 
• Muestra el array ordenado alfabéticamente. 
• Muestra los alumnos cuyo nombre contenga al menos una ‘a’. 
• Muestra el array en el orden inverso al que se creó. 
• Muestra la posición que tiene tu nombre en el array. -->
<body>
    <?php
        $alumnos = ["Mari", "Cruz", "Gabriel", "Ferrán", "Azucena", "Miguel", "Eustaquio"];
        $alumnosInverso = array_reverse($alumnos);
        echo "<p>Número de elementos en el array: " . count($alumnos) . "</p>";
        $cadena = join(" ", $alumnos);
        echo "<p>Cadena de alumnos: " . $cadena . "</p>";
        shuffle($alumnos);
        echo "<p>Array con orden distinto: " . join(" ", $alumnos) . "</p>";
        sort($alumnos);
        echo "<p>Array ordenado alfabéticamente: " . join(" ", $alumnos) . "</p>";
        echo "<p>Alumnos cuyo nombre contenga al menos una 'a': " . join(" ", array_filter($alumnos, fn($a) => str_contains($a, "a"))). "</p>";
        echo "<p>Muestra el array en el orden inverso al que se creó: ";
        foreach($alumnosInverso as $alumno){
            echo "$alumno ";
        }
        echo "</p>";
        echo "<p>Muestra la posición que tiene tu nombre en el array: " . array_search("Gabriel", $alumnos) . "</p>";
    ?>
</body>
</html>