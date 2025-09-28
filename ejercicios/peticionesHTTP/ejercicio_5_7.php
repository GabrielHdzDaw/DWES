
    <?php
    $fecha = "";
    $email = "";
    $observaciones = "";
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
    }
    ?>
<?php
require "./views/ejercicio_5_7.view.php";
?>