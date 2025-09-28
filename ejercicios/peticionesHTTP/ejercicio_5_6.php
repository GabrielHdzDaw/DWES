<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 apartado 5</title>
</head>
<!-- 5. 6. Modifica el ejercicio anterior realizando las validaciones oportunas en los campos de 
fecha, email y observaciones. 
• Eliminar espacios vacíos (trim) 
• Verificar código html (specialchars) 
• Campo fecha con el formato adecuado (createFromFormat): 
if (!DateTime::createFromFormat('Y/m/d',$fecha)){ …} else { … } 
• Campo email con el formato correcto (filter_var): 
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { … } else { … }
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
        $fecha = trim($_POST['fechaNacimiento'] ?? '');
        if (!empty($fecha) && DateTime::createFromFormat('Y-m-d', $fecha)) {
            $fecha = htmlspecialchars($fecha);
        } else {
            $fecha = "Sin fecha de nacimiento o formato incorrecto";
        }

        $email = trim($_POST['email'] ?? '');
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($email);
        } else {
            $email = "Sin email o formato incorrecto";
        }

        $observaciones = trim($_POST['observaciones'] ?? '');
        if (!empty($observaciones)) {
            $observaciones = htmlspecialchars($observaciones);
        } else {
            $observaciones = "Sin observaciones";
        }

        echo "<p>Fecha de nacimiento: $fecha</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Observaciones: $observaciones</p>";
    }
    ?>
</body>

</html>