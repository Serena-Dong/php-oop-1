<?php
// Movie Class
include_once __DIR__ . '/models/movie.php';
// Genre Class
include_once __DIR__ . '/models/genre.php';
// Movie Data
include_once __DIR__ . '/data/movies_data.php';

$movies_library = [];
foreach ($movies as $movie) {
    $movie_object = new Movie($movie['title'], $movie['year'], $movie['director'], $movie['genre']);
    $movies_library[] = $movie_object;

    $movie_object->current($movie['year']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>

    <!-- BootStrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <!-- Css -->
    <link rel="stylesheet" href="./css/styles.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">P H P - M O V I E S</h1>
        <div class="row justify-content-center ">
            <?php foreach ($movies_library as $movie) : ?>
                <div class="col-4 ">
                    <h3><?= $movie->title ?></h3>
                    <p><?= $movie->year ?></p>
                    <p><b><?= $movie->director ?></b></p>
                    <span><?= $movie->genre ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>