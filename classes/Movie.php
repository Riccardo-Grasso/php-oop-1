<?php
class Movie
{
    public $title = "N/D";
    public $director = "N/D";
    public $year = "N/D";
    public $duration = "N/D";
    public $category = "N/D";

    /* GETTER E SETTER TITLE */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($newTitle)
    {
        $this->title = $newTitle;
    }

    /* GETTER E SETTER DIRECTOR */
    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($newDirector)
    {
        $this->director = $newDirector;
    }

    /* GETTER E SETTER YEAR */
    public function getYear()
    {
        return $this->year;
    }

    public function setYear($newYear)
    {
        $this->year = $newYear;
    }

    /* GETTER E SETTER DURATION */
    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($newDuration)
    {
        $this->duration = $newDuration;
    }

    /* GETTER E SETTER CATEGORY */
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($newCategory)
    {
        $this->category = $newCategory;
    }
}
