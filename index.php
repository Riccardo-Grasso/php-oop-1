<?php
require_once __DIR__ . "/classes/Movie.php";

$movie1 = new Movie();
$movie1->setTitle("Harry Potter e la pietra filosofale");
$movie1->setDirector("Chris Columbus");
$movie1->setYear("2001");
$movie1->setDuration("152 min");
$movie1->setCategory("Fantasy");

var_dump($movie1);

$movie2 = new Movie();
$movie2->setTitle("Il Signore degli Anelli - La Compagnia dell'Anello");
$movie2->setDirector("Peter Jackson");
$movie2->setYear("2001");
$movie2->setDuration("178 min");
$movie2->setCategory("Fantasy");

var_dump($movie2);
