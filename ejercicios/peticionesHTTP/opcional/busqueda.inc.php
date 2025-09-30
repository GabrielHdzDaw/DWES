<?php
include_once "./canciones.inc.php";
function searchSong($songList, $text, $option, $genre)
{
    $byTitle = function ($song) use ($text, $genre) {
        return str_contains(strtolower($song['titulo']), strtolower($text)) && $song['genero'] === $genre;
    };

    $byAlbum = function ($song) use ($text, $genre) {
        return str_contains(strtolower($song['album']), strtolower($text)) && $song['genero'] === $genre;
    };

    $byBoth = function ($song) use ($byTitle, $byAlbum) {
        return $byTitle($song) || $byAlbum($song);
    };

    if ($option === "titulos") {
        return array_values(array_filter($songList, $byTitle));
    } elseif ($option === "album") {
        return array_values(array_filter($songList, $byAlbum));
    } elseif ($option === "ambos") {
        return array_values(array_filter($songList, $byBoth));
    }

    return [];
}
