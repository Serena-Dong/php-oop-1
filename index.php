<?php
// Movie Class
class Movie
{
    // Istance Variables
    public $title;
    public $year;
    public $director;


    // Constructor
    function __construct($_title, $_year, $_director)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
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

// Movie Objects 
$firstMovie = new Movie('The Dreamers', 2003, 'Bernardo Bertolucci');
$secondMovie = new Movie('Dead Poet Society', 1989, 'Peter Weir');
$thirdMovie = new Movie('Oppenheimer', 2023, 'Christopher Nolan');

$firstMovie->current(2003);
$secondMovie->current(1989);
$secondMovie->current(2023);


var_dump($firstMovie, $secondMovie)


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>

<body>

</body>

</html>