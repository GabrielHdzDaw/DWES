<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 apartado 9</title>
</head>

<body>
    <main>
        <h1>Búsqueda de canciones</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="busqueda">Texto a buscar: </label>
            <input type="text" name="busqueda" id="busqueda"><br><br>
            <label for="donde">Buscar en: </label>
            <input type="radio" name="donde" id="titulos" value="titulos">
            <label for="titulos">Títulos de canción</label>
            <input type="radio" name="donde" id="album" value="album">
            <label for="album">Nombres de álbum</label>
            <input type="radio" name="donde" id="ambos" value="ambos">
            <label for="ambos">Ambos campos</label><br><br>
            <label for="genero">genero</label>
            <select name="genero" id="genero">
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="jazz">Jazz</option>
                <option value="rap">Rap</option>
                <option value="rnb">RnB</option>
                <option value="country">Country</option>
            </select><br><br>
            <input type="submit" value="Buscar">
        </form>
    </main>
    <?php
    include_once "./obtenerDatos.inc.php";
    include_once "./busqueda.inc.php";

    $data = getData();
    $foundSongs = searchSong($canciones, $data["busqueda"], $data["donde"], $data["genero"]);
    if (!empty($foundSongs)) {
        echo '<table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Álbum</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>';

        foreach ($foundSongs as $song) {
            echo '<tr>';
            echo '<td>' . $song['titulo'] . '</td>';
            echo '<td>' . $song['album'] . '</td>';
            echo '<td>' . $song['genero'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>
    </table>';
    } else {
        echo '<p>No se encontraron canciones.</p>';
    }

    ?>
</body>

</html>