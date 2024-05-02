<?php

//Import files
require_once __DIR__ . '/db.php';

// var_dump($moviesList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="./style/style.css">
  <title>Movie List</title>
</head>

<body>
  <h1 class="text-center my-5">Jane Austen movies</h1>

  <div class="container">
    <div class="row row-cols-2">
      <?php foreach ($moviesList as $movie) : ?>
        <div class="col">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo $movie->title ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie->lang ?></h6>
              <p class="card-text"><?php echo $movie->year ?></p>

              <ul class="d-flex justify-content-center">
                <?php foreach ($movie->genres as $genre) : ?>
                  <li class="mx-2"><?php echo $genre ?></li>
                <?php endforeach; ?>
              </ul>

              <p class="card-text fst-italic info-custom"><?php $movie->getMovieInfo() ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>