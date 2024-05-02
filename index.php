<?php
//Import db file
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
// Import head structure
require_once __DIR__ . '/head.php';
?>

<body>
  <h1 class="text-center my-5">Jane Austen movies</h1>

  <div class="container">
    <div class="row row-cols-3">
      <!-- Cards -->
      <?php foreach ($moviesList as $movie) : ?>
        <div class="col my-3">
          <div class="card card-custom">

            <img src="<?php echo $movie->image ?>" class="card-img-top img-custom" alt="<?php echo $movie->title ?>">

            <div class="card-body text-center">
              <h5 class="card-title card-title-custom"><?php echo $movie->title ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie->lang ?></h6>
              <p class="card-text"><?php echo $movie->year ?></p>

              <ul class="d-flex justify-content-center">
                <?php foreach ($movie->genres as $genre) : ?>
                  <li class="mx-2"><?php echo $genre ?></li>
                <?php endforeach; ?>
              </ul>

              <p class="card-text"><?php $movie->actor->getActorInfo() ?></p>

              <p class="card-text fst-italic info-custom"><?php $movie->getMovieInfo() ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- /Cards -->
    </div>
  </div>

</body>

</html>