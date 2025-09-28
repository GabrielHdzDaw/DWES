<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 parte 7</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Formulario</legend>
            <label for="fechaNacimiento">Fecha de nacimiento:</label><br>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?= $fecha?>"><br><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="<?= $email?>"><br><br>
            <label for="observaciones">Observaciones:</label><br>
            <textarea name="observaciones" id="observaciones" ><?= $observaciones?></textarea><br><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>

</html>