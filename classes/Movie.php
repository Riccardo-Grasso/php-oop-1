<?php
class Movie
{
    public $title = "N/D";
    public $director = "N/D";
    public $year = "N/D";
    public $duration = "N/D";
    public $category = "N/D";
    public $poster = "https://betravingknows.com/wp-content/uploads/2017/06/video-movie-placeholder-image-grey.png";

    /* COnSTRUCT */

    function __construct($_title)
    {
        $this->setTitle($_title);
    }

    /* GETTER E SETTER TITLE */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($newTitle)
    {
        if (is_null($newTitle)) {
            return;
        }
        $this->title = $newTitle;
    }

    /* GETTER E SETTER DIRECTOR */
    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($newDirector)
    {
        if (is_numeric($newDirector)) {
            return "Inserire un formato valido";
        }
        $this->director = $newDirector;
    }

    /* GETTER E SETTER YEAR */
    public function getYear()
    {
        return $this->year;
    }

    public function setYear($newYear)
    {
        if (!is_numeric($newYear)) {
            return "Formato anno di uscita non valido";
        }
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

    /* GETTER E SETTER POSTER */
    public function getPoster()
    {
        return $this->poster;
    }

    public function setPoster($newPoster)
    {
        $this->poster = $newPoster;
    }

    /***********************************/

    public function getMovieData()
    {
        return  "<strong>$this->title</strong>" . "<br>" . $this->director . "<br>" . $this->year . "<br>" . $this->duration . "<br>" . $this->category . "<br><br>";
    }

    public function createCard()
    {
        return "
        <div class='col'>
            <div class='card' style='width: 18rem;'>
                <img src='$this->poster' class='card-img-top' alt='movie-poster'>
                <div class='card-body'>
                    <h5 class='card-title mb-3'>$this->title</h5>
                    <h6 class='card-subtitle mb-3 text-muted fst-italic'>$this->director</h6>
                    <h6 class='mb-3'>Anno: $this->year</h6>
                    <h6 class='mb-3'>Durata: $this->duration</h6>
                    <h6 class='mb-3'>Genere: $this->category</h6>
                </div>
            </div>
        </div>";
    }
}
