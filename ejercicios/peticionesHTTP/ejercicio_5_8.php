
    <?php
    $datos = [
        ["nombre" => "Gabriel", "fechaNacimiento" => "16/02/1993", "email" => "gabrielhernandezcollado@gmail.com", "observaciones" => "sí"],
        ["nombre" => "Eustaquio", "fechaNacimiento" => "11/05/1995", "email" => "eustaquiohabichuela@gmail.com", "observaciones" => "lentejas aguacate"],
    ];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = trim($_POST["nombre"] ?? "");
        if (!empty($nombre)) {
            $nombre = htmlspecialchars($nombre);
        } else {
            $nombre = "Sin nombre";
        }

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
        array_push($datos, ["nombre" => $nombre, "fechaNacimiento" => $fecha, "email" => $email, "observaciones", $observaciones]);
    }

    require "./views/ejercicio_5_8.view.php";

    echo ' <table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Fecha he nacimiento</th>
            <th>Email</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>';

    foreach ($datos as $dato) {
        echo "<tr>";
        echo "<td>" . $dato['nombre'] . "</td>";
        echo "<td>" . $dato['fechaNacimiento'] . "</td>";
        echo "<td>" . $dato['email'] . "</td>";
        echo "<td>" . $dato['observaciones'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>
        </table>";

    ?>

