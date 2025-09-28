<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 apartado 5</title>
</head>
<!-- 5. Como al entrar por primera vez, no hay datos en POST, obtendremos un error al 
intentar acceder a las variables que no están definidas. Soluciona el problema de los 
parámetros no enviados del ejercicio anterior. 
• Primero comprobando si se hay datos en POST con: 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { … } 
• Segundo utilizando el operador de fusión nula ¿? 
$fecha = $_POST['fecha'] ?? ""; 
Analiza cuál de las dos opciones es mejor o si sería preferible implementar solamente 
una de las dos.

Pienso que hay que implementar ambas. Primero debemos comprobar el método. Si no es el que deseamos, no tratamos los datos que nos lleguen. 
Si el método es el esperado, comprobamos que los campos han sido enviados y tratamos los datos. Si no fuese así, 
entraría en juego el operador de fusión nula. En su defecto, los valores se asignan a las variables.
-->


<body>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Formulario</legend>
            <label for="fechaNacimiento">Fecha de nacimiento:</label><br>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento"><br><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br><br>
            <label for="observaciones">Observaciones:</label><br>
            <textarea name="observaciones" id="observaciones"></textarea><br><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fecha = $_GET['fechaNacimiento'] ?? "Sin fecha de nacimiento";
        $email = $_GET['email']  ?? "Sin email";
        $observaciones = $_GET['observaciones']  ?? "Sin observaciones";
    }

    echo "<p>Fecha de nacimiento: $fecha";
    echo "<p>Email: $email";
    echo "<p>Observaciones: $observaciones";
    ?>
</body>

</html>