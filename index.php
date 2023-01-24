<?php
class Movie
{

    public $title;
    public $category;
    public $relDate;
    public $language;

    public function __construct($title, $category, $relDate, $language)
    {

        $this->title = $title;
        $this->category = $category;
        $this->relDate = $relDate;
        $this->language = $language;
    }

    public function getFullMovies()
    {

        return "<h1> Title: " . $this->title . "</h1>"
            . "<h2> Category: " . $this->category . "</h2>"
            . "<h2> Release Date: " . $this->relDate . "</h2>"
            . "<h3> Language: (" . $this->language . ") </h2>";
    }

}

$movies = [
    new Movie("The Godfather", "crime", "24/03/1972", "English"),
    new Movie("The Godfather Part II", "crime", "12/12/1974", "English")
];

foreach ($movies as $movie) {
    echo "<div>";

    echo $movie->getFullMovies();

    echo "</div>";
}
?>