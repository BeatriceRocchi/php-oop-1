<?php

//Import files
require_once __DIR__ . '/Models/Movie.php';

$moviesList = [
  $PrideAndPrejudice = new Movie('Pride & Prejudice', 2005, ['sentimental', 'comedy', 'dramatic'], 'Joe Wright', 'Deborah Moggach', 'Dario Marianelli'),

  $SenseAndSensibility = new Movie('Sense & Sensibility', 1995, ['sentimental', 'dramatic'], 'Ang Lee', 'Emma Thompson', 'Patrick Doyle')
];
