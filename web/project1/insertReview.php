<?php
session_start();

// get the variables from the previous page
$resort = $_POST["resort"];
$rating = $_POST["rating"];
$user = $_SESSION["name"];

echo "$user<br>";
// connect to the database
require("dbConnect.php");
$db = get_db();

// get the users ID number
$personQuery = "SELECT * FROM person WHERE username='$user'";
$personStatement = $db->prepare($personQuery);
$personStatement->execute();

while ($fRow = $personStatement->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
}

echo "$id<br>";

// create the query and execute
try {
    $query = "INSERT INTO review(place, reviewer, rating) VALUES(:resort, :user, :rating)";
    $statement = $db->prepare($query);
    $statement->bindValue(':resort', $resort);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':user', $id);
    $statement->execute();

    header('Refresh: 2, URL=https://rocky-reef-99024.herokuapp.com/project1/ski.php');
}
catch (Exception $ex) {
    echo "ERROR with the DB. Details:<br>$ex";
    die();
}

die();
?>