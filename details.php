<?php
// connect
$mongo = new MongoClient();

// select a database
$db = $mongo->university;

// select a collection (analogous to a relational database's table)
$collection = $db->students;

if (isset($_GET['id_d'])) {
    $id = $_GET['id_d'];
    $student = $collection->find(array("matrNr" => "$id"));
    foreach ($student as $document) {
        if (isset($document["matrNr"])) $matrNr = $document["matrNr"];
        if (isset($document["name"])) $name = $document["name"];
        if (isset($document["kurs"])) $kurs = $document["kurs"];
        if (isset($document["e-mail"])) $email = $document["e-mail"] . "</td>";
    }

}
?>

<html>
<head>
    <title>Student <?php echo $matrNr; ?></title>
</head>
<body>
<h1>Details zu Student <?php echo $name; ?>, MatrNr: <?php echo $matrNr ?></h1>
<table border="1">
    <tr>
        <th>MatrNr</th>
        <th>Name</th>
        <th>Kurs</th>
        <th>E-Mail</th>
    </tr>

    <?php
    if (isset($matrNr)) echo "<td>" . $matrNr . "</td>"; else echo "<td/>";
    if (isset($name)) echo "<td>" . $name . "</td>"; else echo "<td/>";
    if (isset($kurs)) echo "<td>" . $kurs . "</td>"; else echo "<td/>";
    if (isset($email)) echo "<td>" . $email . "</td>"; else echo "<td/>";
    ?>
</table>
<h1>Kurse</h1>
<table border="1">
    <tr>
        <th>Kurs</th>
        <th>Raum</th>
    </tr>
    <?php
    $collection_b = $db->lessons;
    $lessons = $collection_b->find(array("matrNr" => "$id"));
    foreach ($lessons as $lesson) {
        echo "<tr>";
        echo "<td>" . $lesson["lesson"] . "</td>";
        echo "<td>" . $lesson["raum"] . "</td>";
        echo "</tr>";
    }
    ?>


</body>
</html>
