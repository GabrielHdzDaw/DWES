<?php
function getData(){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $busqueda = trim($_POST["busqueda"] ?? "");
        if (!empty($busqueda)) {
            $busqueda = htmlspecialchars($busqueda);
        }

        $donde = trim($_POST['donde'] ?? "");
        if (!empty($donde)) {
            $donde = htmlspecialchars($donde);
        }

        $genero = trim($_POST["genero"] ?? "");
        if (!empty($genero)) {
            $genero = htmlspecialchars($genero);
        }
    }

    return ["busqueda" => $busqueda,  "donde" => $donde,  "genero" => $genero];
}
