<?php
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
