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

    public function getFullMovie()
    {

        return $this->title
            . " - " . $this->category
            . " - " . $this->relDate
            . " (" . $this->language . ")";
    }

}
?>