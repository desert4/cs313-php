<?php
session_start();

// get the variables from the previous page
$resort = $_POST["resort"];
$rating = $_POST["rating"];
$user = $_SESSION["name"];

echo "$user";
// connect to the database
require("dbConnect.php");
$db = get_db();

// create the query and execute
try {
    $query = "INSERT INTO review(place, reviewer, rating) VALUES(:resort, :user, :rating)";
    $statement = $db->prepare($query);
    $statement->bindValue(':resort', $resort);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':user', $user);
    $statement->execute();

    header('Refresh: 2, URL=https://rocky-reef-99024.herokuapp.com/project1/ski.php');
}
catch (Exception $ex) {
    echo "ERROR with the DB. Details:<br>$ex";
    die();
}

die();
?>