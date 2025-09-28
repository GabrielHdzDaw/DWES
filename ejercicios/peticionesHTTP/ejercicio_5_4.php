<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 apartado 4</title>
</head>
<!-- 4. Crea un formulario que tenga los siguientes campos (ejercicio_5_4.php): 
• Fecha de nacimiento 
• Email 
• Observaciones 
En el action del formulario pondremos lo siguiente: 
action="<?= $_SERVER['PHP_SELF']; ?>" 
Esto hará que sea la propia página del formulario la que procese los datos del mismo. 
Al pulsar enviar deben aparecer debajo del formulario los datos que se han 
introducido en el mismo. 
• La primera vez que se llama a la página, ¿qué tipo de petición se realiza? 
GET 
• ¿Y cuando se envía el formulario? 
GET también
-->


<body>

    <form action="<?= $_SERVER['PHP_SELF']; ?>">
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
        $fecha = $_GET['fechaNacimiento'] ?? "Sin fecha de nacimiento";
        $email = $_GET['email']  ?? "Sin email";
        $observaciones = $_GET['observaciones']  ?? "Sin observaciones";

        echo "<p>Fecha de nacimiento: $fecha";
        echo "<p>Email: $email";
        echo "<p>Observaciones: $observaciones";
    ?>
</body>

</html>