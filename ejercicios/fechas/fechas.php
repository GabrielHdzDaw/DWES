<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<!-- Fechas. Crea una página llamada fechas.php que muestre lo siguiente: 
• Muestra la fecha y hora actuales con el formato: dd/mm/yyyy hh:mm:ss 
• Muestra el nombre de la zona horaria que se utiliza por defecto. 
• Muestra la fecha de dentro de 45 días. 
• Muestra el número de días que han pasado desde el 1 de enero. 
• Muestra la fecha y hora actuales de Nueva York. 
• Muestra el día de la semana que era el 1 de enero de este año.  -->
<body>
    <?php
        $fecha = new DateTime();
        // echo "<p>Muestra la fecha y hora actuales con el formato dd/mm/yyyy hh:mm:ss: " . date("d/m/Y h:m:s") . "</p>";
        echo "<p>Muestra la fecha y hora actuales con el formato dd/mm/yyyy hh:mm:ss: " . $fecha->format("d/m/Y h:m:s") . "</p>";

        echo "<p>Muestra el nombre de la zona horaria que se utiliza por defecto: " . date_default_timezone_get() . "</p>";

        $fecha->add(new DateInterval("P45D"));
        // echo "<p>Muestra la fecha de dentro de 45 días: " . date("d/m/Y h:m:s", strtotime("+45 days")) . "</p>";
        echo "<p>Muestra la fecha de dentro de 45 días: " . $fecha->format("d/m/Y h:m:s") . "</p>";

        $timestamp = new DateTime("01-01-" . date("Y"));
        $today = new DateTime();
        $diff = $today->diff($timestamp);
        echo "<p>Muestra el número de días que han pasado desde el 1 de enero: " . $diff->days . " días</p>";

        $fechaNuevaYork = new DateTime("now", new DateTimeZone("America/New_York"));
        echo "<p>Muestra la fecha y hora actuales de Nueva York: " . $fechaNuevaYork->format("d/m/Y h:m:s") . "</p>";

        $diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        echo "<p>Muestra el día de la semana que era el 1 de enero de este año: " . $diasSemana[date("w", strtotime("01-01-" . date("Y")))] . "</p>";
    ?>
</body>
</html>