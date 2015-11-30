<?php

// connect
$mongo = new MongoClient();

// select a database
$db = $mongo->university;

// select a collection (analogous to a relational database's table)
$collection = $db->lessons;

$document = array("matrNr" => "11111", "lesson" => "BWL", "raum" => "203");
$collection->insert($document);
$document = array("matrNr" => "11111", "lesson" => "Mathe", "raum" => "203");
$collection->insert($document);
$document = array("matrNr" => "11111", "lesson" => "Englisch", "raum" => "206");
$collection->insert($document);

$document = array("matrNr" => "11112", "lesson" => "BWL", "raum" => "203");
$collection->insert($document);
$document = array("matrNr" => "11112", "lesson" => "Mathe", "raum" => "203");
$collection->insert($document);
$document = array("matrNr" => "11112", "lesson" => "Informatik", "raum" => "207");
$collection->insert($document);

$document = array("matrNr" => "11113", "lesson" => "BWL", "raum" => "203");
$collection->insert($document);
$document = array("matrNr" => "11113", "lesson" => "English", "raum" => "206");
$collection->insert($document);

?>