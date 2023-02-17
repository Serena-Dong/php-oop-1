<?php
// Movie Class
class Movie
{
    // Istance Variables
    public $title;
    public $year;
    public $director;
    public $genre;


    // Constructor
    function __construct($_title, $_year, $_director, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    // Methods
    public function current($_year)
    {
        $this->year = $_year;
        $current_year = date("Y");
        if ($_year == $current_year) {
            var_dump('New');
        } else {
            var_dump('Old');
        }
    }
}

// Genre Class
class Genre
{
    public $name;
    function __construct($_name)
    {
        $this->name = $_name;
    }
}
// Movie Objects 
$firstMovie = new Movie('The Dreamers', 2003, 'Bernardo Bertolucci', 'Drammatic');
$secondMovie = new Movie('Dead Poet Society', 1989, 'Peter Weir', 'Romantic');
$thirdMovie = new Movie('Oppenheimer', 2023, 'Christopher Nolan', 'Thriller');

$firstMovie->current(2003);
$secondMovie->current(1989);
$secondMovie->current(2023);

$movies = [
    [
        'id' => 1,
        'title' => 'The Dreamers',
        'year' => 2003,
        'director' => 'Bernardo Bertolucci',
        'genre' => 'Dramatic'
    ],
    [
        'id' => 2,
        'title' => 'Dead Poet Society',
        'year' => 1989,
        'director' => 'Peter Weir',
        'genre' => 'Romantic'
    ],
    [
        'id' => 3,
        'title' => 'Oppenheimer',
        'year' => 2023,
        'director' => 'Christopher Nolan',
        'genre' => 'Thriller'
    ]
];


$movies_library = [];
foreach ($movies as $movie) {
    $movie_object = new Movie($movie['title'], $movie['year'], $movie['director'], $movie['genre']);
    $movies_library[] = $movie_object;
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
                <div class="col-4 border border-white">
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