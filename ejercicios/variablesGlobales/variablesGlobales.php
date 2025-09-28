<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables globales</title>
</head>

<body>
    <?php
    //     11. Variables superglobales. Crea una función que devuelva la uri de la página actual 
    // eliminando el carácter ‘/’ inicial. 
    function getUri()
    {
        return substr($_SERVER['REQUEST_URI'], 1);
    }

    echo getUri();

    // 12. Variables superglobales. Crea una función como la anterior que elimine el querystring 
    // de la uri si lo tuviera.
    function removeQueryFromUri()
    {
        return substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "?"));
    }

    // 13. Variables superglobales. Crea una función que nos devuelva el método por el que se 
    // ha solicitado la página actual (GET, POST, etc.) 
    function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    // 14. Operadores. Crea una página que compruebe si ha recibido por querystring un 
    // parámetro llamado número: 
    // • En caso de haberlo recibido mostrará por pantalla si el número es mayor, 
    // menor o igual que 10. 
    // • Utiliza los nuevos operadores de PHP 7 <=> y ?? 
    // • Si no se ha recibido ningún parámetro llamado numero, mostrar el mensaje 
    // “No se ha recibido ningún número” 

    function greaterOrLower()
    {
        $numero = $_GET['numero'] ?? null;
        if ($numero) {
            $comparison = $_GET['numero'] <=> 10;
            if ($comparison == 1) {
                echo "<p>$numero es mayor que 10</p>";
            } else if ($comparison == -1) {
                echo "<p>$numero es menor que 10</p>";
            } else {
                echo "<p>$numero es 10</p>";
            }
        } else {
            echo "<p>No se ha recibido ningún número</p>";
        }
    }

    // function greaterOrLower()
    // {
    //     $numero = $_GET['numero'] ?? null;

    //     if ($numero === null) {
    //         echo "<p>No se ha recibido ningún número</p>";
    //         return;
    //     }

    //     $comparison = $numero <=> 10;

    //     echo match ($comparison) {
    //         1 => "<p>$numero es mayor que 10</p>",
    //         -1 => "<p>$numero es menor que 10</p>",
    //         0 => "<p>$numero es 10</p>",
    //     };
    // }


    ?>
</body>

</html>