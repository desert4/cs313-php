<?php
session_start();
$resort = $_POST["resort"];
$rating = $_POST["rating"];
$user = $_POST["user"];

require("dbConnect.php");
$db = get_db();
try {
    $query = "INSERT INTO review(place, reviewer, rating) VALUES(:resort, :user, :rating)";
    $statement = $db->prepare($query);
    $statement->bindValue(':resort', $resort);
    $statement->bindValue('rating', $rating);
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