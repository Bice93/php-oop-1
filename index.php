<?php 

//Create a new class "Movie"
class Movie{

    //Declare variables or attributes
    private $title;
    private $year;
    private $duration;

    //Define the constructor
    function __construct($_title, $_year, $_duration)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->duration = $_duration;
        }

}

?>