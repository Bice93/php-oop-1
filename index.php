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
            $this->setTitle($_title);
            $this->setYear($_year);
            $this->setDuration($_duration);
        }
    
    //Define a method/function of the class
    public function getTitle(){
        return $this->title;
    }

    private function setTitle($title){
        $this->title = $title;
    }

    public function getYear(){
        return $this->year;
    }

    private function setYear($year){
        $this->year = $year;
    }

    public function getDuration(){
        return $this->duration;
    }

    private function setDuration($duration){
        $this->duration = $duration;
    }

}

//Create objects of the class Movie
$thrillerMovie = new Movie("Shutter Island", "2010", "2:18");
var_dump($thrillerMovie);

$horroMovie = new Movie("Sinister", "2012", "1:50");
var_dump($horroMovie);

$adventureMovie = new Movie("Cast Away", "2000", "2:23");
var_dump($adventureMovie);

?>