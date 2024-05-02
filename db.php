<?php

//Import files
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Actor.php';

$moviesList = [
  $PrideAndPrejudice = new Movie('Pride & Prejudice', 2005, ['sentimental', 'comedy', 'dramatic'], 'https://www.telefilm-central.org/wp-content/uploads/2018/12/orgoglio-e-giudizio-2005-curiosit%C3%A0-cover.png', 'Joe Wright', 'Deborah Moggach', 'Dario Marianelli', new Actor('Keira', 'Knightley', 'Elizabeth Bennet')),

  $SenseAndSensibility = new Movie('Sense & Sensibility', 1995, ['sentimental', 'dramatic'], 'https://api.new-longtake.sq.biz/storage/assets/covers/1995/ragione-e-sentimento-5d247bd5309d4.jpg', 'Ang Lee', 'Emma Thompson', 'Patrick Doyle', new Actor('Emma', 'Thompson', 'Elinor Dashwood')),

  $Emma = new Movie('Emma', 1996, ['sentimental', 'comedy', 'dramatic'], 'https://www.blogo.it/app/uploads/sites/3/2019/03/mv5bnmvlnjy3ntutyje5mc00odq1lwfkmmmtmzy2y2qwztdlnmq1xkeyxkfqcgdeqxvyntqxmtixmtk-v1.jpg', 'Douglas McGrath', 'Douglas McGrath', 'Rachel Portman', new Actor('Gwyneth', 'Paltrow', 'Emma Woodhouse')),

  $MansfieldPark = new Movie('Mansfield Park', 1999, ['sentimental', 'dramatic'], 'https://austenismi.files.wordpress.com/2014/05/mansfield-park-jonny-lee-miller-frances-o-connor.jpg', 'Patricia Rozema', 'Patricia Rozema', 'Lesley Barber', new Actor('Embeth', 'Davidtz', 'Mary Crawford')),

  $NorthangerAbbey = new Movie('Northanger Abbey', 2007, ['sentimental', 'dramatic'], 'https://bibliotecapalazzolo.it/wp-content/uploads/2019/07/northanger-abbey.jpg', 'Jon Jones', 'Andrew Davies', 'Charlie Mole', new Actor('Felicity', 'Jones', 'Catherine Morland')),

  $BecomingJane = new Movie('Becoming Jane', 2007, ['biographic', 'dramatic'], 'https://m.media-amazon.com/images/S/pv-target-images/dab0bdc6f589fe2d69eeb6aaf8fcc259eea4ae4b44141cf8fdba8be14f40f26f._SX1080_FMjpg_.jpg', 'Julian Jarrold', 'Sarah Williams', 'Adrian Johnston', new Actor('Anne', 'Hathaway', 'Jane Austen')),
];
