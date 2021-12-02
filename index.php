<?php
require_once __DIR__ . "/classes/Movie.php";

$data = [
    [
        "titolo" => "Harry Potter e la pietra filosofale",
        "director" => "Chris Columbus",
    ],

    [
        "titolo" => "Harry Potter e la pietra filosofale 2",
        "director" => "Chris Columbus 2",
    ],
];
/* 
$movie1 = new Movie("Harry Potter e la pietra filosofale");
$movie1->setDirector("Chris Columbus");
$movie1->setYear(2001);
$movie1->setDuration("152 min");
$movie1->setCategory("Fantasy"); */
/* echo $movie1->getMovieData(); */
//echo $movie1->createCard();


$movie2 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello");
$movie2->setDirector("Peter Jackson");
$movie2->setYear(2001);
$movie2->setDuration("178 min");
$movie2->setCategory("Fantasy");
/* echo $movie2->getMovieData(); */
echo $movie2->createCard();

$movie3 = new Movie("Avengers");
$movie3->setDirector("Joss Whedon");
$movie3->setYear(2012);
$movie3->setDuration("142 min");
$movie3->setCategory("Cinecomic");
/* echo $movie3->getMovieData(); */
echo $movie3->createCard();
?>




<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>MyMovies</title>
</head>

<body>
    <main class>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    foreach ($data as $movie) {
                        $movie1 = new Movie($movie["titolo"]);
                        $movie1->setDirector($movie["director"]);
                        $movie1->setYear(2001);
                        $movie1->setDuration("152 min");
                        $movie1->setCategory("Fantasy");
                        /* echo $movie1->getMovieData(); */
                        echo $movie1->createCard();
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>