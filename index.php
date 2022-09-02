<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>

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
        //var_dump($thrillerMovie);

        $horrorMovie = new Movie("Sinister", "2012", "1:50");
        //var_dump($horrorMovie);

        $adventureMovie = new Movie("Cast Away", "2000", "2:23");
        //var_dump($adventureMovie);

    ?>

    <h1>List Movies</h1>
    <ul>
        <li> Titolo:
            <?php echo $thrillerMovie->getTitle(); ?>
            <br>
            Anno di uscita:
            <?php echo $thrillerMovie->getYear(); ?>
            <br>
            Durata:
            <?php echo $thrillerMovie->getDuration(); ?>
        </li>
        <br>
        <li> Titolo:
            <?php echo $horrorMovie->getTitle(); ?>
            <br>
            Anno di uscita:
            <?php echo $horrorMovie->getYear(); ?>
            <br>
            Durata:
            <?php echo $horrorMovie->getDuration(); ?>
        </li>
        <br>
        <li> Titolo:
            <?php echo $adventureMovie->getTitle(); ?>
            <br>
            Anno di uscita:
            <?php echo $adventureMovie->getYear(); ?>
            <br>
            Durata:
            <?php echo $adventureMovie->getDuration(); ?>
        </li>
    </ul>
    
</body>
</html>