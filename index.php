<?php

//Import files
require_once __DIR__ . '/Models/Movie.php';

//Instances
$PrideAndPrejudice = new Movie('Pride & Prejudice', 2005, ['sentimental', 'comedy', 'dramatic'], 'Joe Wright', 'Deborah Moggach', 'Dario Marianelli');

$SenseAndSensibility = new Movie('Sense & Sensibility', 1995, ['sentimental', 'dramatic'], 'Ang Lee', 'Emma Thompson', 'Patrick Doyle');

var_dump($PrideAndPrejudice);
var_dump($PrideAndPrejudice->getMovieInfo());
var_dump($SenseAndSensibility);
var_dump($SenseAndSensibility->getMovieInfo());

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie List</title>
</head>

<body>

</body>

</html>