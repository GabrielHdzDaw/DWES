<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $array = [];
        array_push($array, "lentejas");
        $array[] = "patatas";
        print_r($array);
        foreach ($array as $item) {
            echo $item;
        }
    ?>
</body>
</html>