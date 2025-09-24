<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 2</title>
</head>
<!-- • Crea un array de alumnos donde cada elemento sea otro array que contenga 
el id, nombre y edad del alumno. 
• Crea una tabla en la que se muestren todos los datos de los alumnos. 
• Utiliza la función array_column para obtener un array indexado que contenga 
únicamente los nombres de los alumnos y muéstralo por pantalla. 
• Crea un array con 10 números: 
o Utiliza la función array_sum para obtener la suma de los 10 
números. 
o Utiliza la función array_reduce para obtener la multipllilcación al de 
los 10 números -->

<body>
    <?php
    $alumnos = [
        ['id' => 1, 'nombre' => "Mari", 'edad' => 26],
        ['id' => 2, 'nombre' => "Cruz", 'edad' => 29],
        ['id' => 3, 'nombre' => "Eustaquio", 'edad' => 45],
        ['id' => 4, 'nombre' => "Marcos", 'edad' => 20],
        ['id' => 5, 'nombre' => "Nehuén", 'edad' => 20],
        ['id' => 6, 'nombre' => "Felipe", 'edad' => 63],
    ];

    echo "<table border='1'><th>ID</th><th>Nombre</th><th>Edad</th>";
    foreach ($alumnos as $alumno) {
        echo "<tr><td>" . $alumno['id'] . "</td><td>" . $alumno['nombre'] . "</td><td>" . $alumno['edad'] . "</td></tr>";
    }
    echo "</table>";

    $alumnosIndexado = array_column($alumnos, 'nombre');

    echo "<p>Nombres alumnos: ";
    foreach ($alumnosIndexado as $alumno) {
        echo "$alumno ";
    }
    echo "</p>";

    $numeros = [4, 5, 76, 23, 12, 8, 56, 123, 2, 6];
    echo "<p>Array de números: " . join(" ", $numeros) . "</p>";
    echo "<p>Suma de los números del array: " . array_sum($numeros) . "</p>";
    echo "<p>Multiplicación de los números del array: " . array_reduce($numeros, fn($total, $n) => $total * $n, 1) . "</p>";

    ?>
</body>

</html>