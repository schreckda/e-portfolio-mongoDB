<?php

// connect
$mongo = new MongoClient();

// select a database
$db = $mongo->university;

// select a collection (analogous to a relational database's table)
$collection = $db->students;

// add a record
$document = array("_id" => "0001", "matrNr" => "11111", "name" => "Mueller");
$collection->insert($document);

// add another student, with a different "shape"
$document = array("_id" => "0002", "matrNr" => "11112", "name" => "Maier", "kurs" => "TINF14B2");
$collection->insert($document);

// , array("lesson"=>["BWL", "Mathe", "Englisch"])

//add more students
$document = array("_id" => "0003", "matrNr" => "11113", "name" => "Schulze", "kurs" => "TINF14B1");
$collection->insert($document);

$document = array("_id" => "0004", "matrNr" => "11114", "name" => "Schreck", "kurs" => "TINF14B2");
$collection->insert($document);

$document = array("_id" => "0005", "matrNr" => "11115", "name" => "Lehnert", "kurs" => "TINF14B3");
$collection->insert($document);

$document = array("_id" => "0006", "matrNr" => "11116", "name" => "Guenther", "kurs" => "TINF14B2");
$collection->insert($document);

$document = array("_id" => "0007", "matrNr" => "11117", "name" => "Schulmeister");
$collection->insert($document);

$document = array("_id" => "0008", "matrNr" => "11118", "name" => "student", "kurs" => "TINF14B2", "e-mail" => "student@dhbw-ka.de");
$collection->insert($document);

?>