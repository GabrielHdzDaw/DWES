<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <?php
    
    //     6. Funciones. Queremos crear una función llamada insert que nos genere una sentencia 
    // insert into en sql. 
    // • Para ello la función recibirá dos parámetros: 
    // o El nombre de la tabla 
    // o Un array asociativo que contendrá los nombres y valores de los 
    // campos de la tabla. 
    // • La sentencia resultante tendrá la siguiente forma: 
    // o INSERT INTO nombre_tabla (nombres campos separados por comas) 
    // VALUES (valores campos separados por comas con el carácter ‘:’ 
    // delante) 
    // • De momento no haremos nada con los valores de los campos. 
    // • Ayuda: utiliza las funciones sprintf, implode y array_keys. 

    function insert($tableName, $array)
    {

        return "INSERT INTO $tableName (" . implode(",", array_keys($array)) . ") VALUES (:" . implode(", :", array_values($array)) . ");";
    }

    echo "<p>" . insert("verduras", ["nombre" => "lechuga", "color" => "verde"]) . "</p>";

    // 7. Funciones. A partir del ejercicio anterior, crea la función insert2 que reciba los mismos 
    // parámetros más un parámetro booleano para indicar si queremos generar la query con 
    // los nombres de los campos o no. 
    // • El parámetro tendrá el valor true por defecto. 
    // • Si su valor es true generará la query igual que en el ejercicio anterior, pero si 
    // es false la generará así: 
    // o INSERT INTO nombre_tabla VALUES (valores campos separados por 
    // comas con el carácter ‘:’ delante) 

    function insert2($tableName, $array, $fields = true) {

        if ($fields) {
            return "INSERT INTO $tableName (" . implode(", ", array_keys($array)) . ") VALUES (:" . implode(", :", array_values($array)) . ");";
        }
        return "INSERT INTO $tableName " . " VALUES (:" . implode(", :", array_values($array)) . ");";
    } 

    echo "<p>" . insert2("verduras", ["nombre" => "lechuga", "color" => "verde"], false) . "</p>";


    // 8. Funciones. Repite el ejercicio anterior con los siguientes cambios: 
    // • La cadena resultante se pasará por referencia. 
    // • Pasaremos la cadena de la siguiente forma: 
    // o INSERT INTO tabla (campos) VALUES (valores) 
    // F Dentro de la función sustituiremos lo siguiente: 
    // o El texto tabla por el nombre de la tabla. 
    // o El texto campos por los nombres de los campos separados por 
    // comas 
    // o El texto valores por los nombres de los campos separados por comas 
    // y el carácter ‘:’ delante. 
    function insert3(&$query, $tableName, $array) {
        $query = str_replace("tabla", $tableName, $query);
        $query = str_replace("campos", implode(", ", array_keys($array)), $query);
        $query = str_replace("valores", implode(", :", array_values($array)), $query);
    } 
    $query = "INSERT INTO tabla (campos) VALUES (valores)";
    insert3($query, "verduras", ["nombre" => "lechuga", "color" => "verde"]);
    echo "<p>$query</p>";


    // 9. Funciones, tipificación estricta. Modifica el ejercicio anterior para forzar a las 
    // funciones que utilicen tipos de tatos en los parámetros pasados.
    
    function insert4(string &$query, string $tableName, array $array) {
        $query = str_replace("tabla", $tableName, $query);
        $query = str_replace("campos", implode(", ", array_keys($array)), $query);
        $query = str_replace("valores", implode(", :", array_values($array)), $query);
    } 
    
    // 10. Funciones anónimas. Queremos crear una función anónima que muestre el resultado 
    // de una operación con dos operandos:  
    // • Se mostrará por pantalla el primer operando, el símbolo de la operación, el 
    // segundo operando, el símbolo = y el resultado de la operación 
    // • La operación podría ser: suma, resta, multiplicación, etc. 
    // • Ejemplo de salida: 5 + 3 = 8 
    // • La idea es que la función reciba como parámetro un closure que se encargue 
    // de realizar la operación, de forma que podamos llamar distintas veces a la 
    // misma función cambiando el closure para distintas operaciones.


    $suma = function ($n1, $n2) {
        return ["result" => $n1 + $n2, "symbol" =>"+"];
    };
    $resta = function ($n1, $n2) {
        return ["result" => $n1 - $n2, "symbol" =>"-"];
    };
    $multiplicacion = function ($n1, $n2) {
        return ["result" => $n1 * $n2, "symbol" =>"*"];
    };
    $division = function ($n1, $n2) {
        return ["result" => $n1 / $n2, "symbol" =>"/"];
    };

    function makeOperation($n1, $n2, callable $operation){
        $res = $operation($n1, $n2);
        return "$n1 " . $res["symbol"] . " $n2 = ". $res['result'];
    }

    echo makeOperation(20, 30, $suma);

    ?>
</body>

</html>