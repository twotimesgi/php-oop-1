
<?php
    class Movie{
        private $title;
        private $duration;
        private $genre;
        private $lang;

        function __construct($_title, $_duration, $_genre, $_lang){
            $this->title = $_title;
            $this->duration = $_duration;
            $this->genre = $_genre;
            $this->lang = $_lang;
        }

        function setTitle($_title){
            $this->title = $_title;
        }

        function setDuration($_duration){
            $this->duration = $_duration . " minutes";
        }

        function setGenre($_genre){
            $this->genre = $_genre;
        }

        function setLang($_lang){
            $this->lang = $_lang;
        }

        function getTitle(){
            return $this->title;
        }

        function getDuration(){
            return $this->duration;
        }

        function getGenre(){
            return $this->genre;
        }

        function getLang(){
            return $this->lang;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

<?php
    $movies = [];
    array_push($movies,  new Movie("Pulp Fiction", "120:20", "Drama", "EN"));
    array_push($movies,  new Movie("Jurassic Park", "90:10", "Action", "EN"));
    array_push($movies,  new Movie("The Bourne Identity", "111:10", "Action", "EN"));

    foreach($movies as $movie){
        echo "<ul>";
        echo "<li>Title: ".$movie->getTitle()."</li>";
        echo "<li>Duration ".$movie->getDuration()."</li>";
        echo "<li>Genre: ".$movie->getGenre()."</li>";
        echo "<li>Language: ".$movie->getLang()."</li>";
        echo "</ul>";
    }
?>

</body>
</html>