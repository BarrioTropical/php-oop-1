<?php
include_once __DIR__ . '/models/movie.php';

$jerry_maguire = new Movie("Jerry Maguire", ["sport", "romantic", "comedian"], 140);
var_dump($jerry_maguire);

echo "<br>";

$ocean_twelve = new Movie("Ocean Twelve", ["comedy", "action"], 120);
var_dump($ocean_twelve);

?>