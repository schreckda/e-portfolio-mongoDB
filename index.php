<?php
// connect
$mongo = new MongoClient();

// select a database
$db = $mongo->university;

// select a collection (analogous to a relational database's table)
$collection = $db->students;
$collection_b = $db->lessons;

if (isset($_GET['id_d'])) {
    $id = $_GET['id_d'];
    $collection->remove(array("matrNr" => "$id"));
    $collection_b->remove(array("matrNr" => "$id"));
}

?>

<html>
<head>
    <title>University</title>
</head>
<body style="align-content: center">
<h1>University</h1>
<table border="1">
    <tr>
        <th>MatrNr</th>
        <th>Name</th>
        <th>Kurs</th>
        <th>E-Mail</th>
    </tr>

    <?php
    // find everything in the collection
    $cursor = $collection->find();

    // iterate through the results
    foreach ($cursor as $document) {
        $id = "location.href='index.php?id_d=" . $document["matrNr"] . "'";
        $id_details = "location.href='details.php?id_d=" . $document["matrNr"] . "'";
        echo "<tr>";
        if (isset($document["matrNr"])) echo "<td>" . $document["matrNr"] . "</td>"; else echo "<td/>";
        if (isset($document["name"])) echo "<td>" . $document["name"] . "</td>"; else echo "<td/>";
        if (isset($document["kurs"])) echo "<td>" . $document["kurs"] . "</td>"; else echo "<td/>";
        if (isset($document["e-mail"])) echo "<td>" . $document["e-mail"] . "</td>"; else echo "<td/>";
        echo '<td><button onclick="' . $id_details . '">Details</button></td>';
        echo '<td><button onclick="' . $id . '">Delete</button></td>';
        echo "<tr>";
    }

    ?>

</table>
</body>
</html>
