<?php
require("dbConnect.php");
$db = get_db();

$username = $_POST["username"];
$password = $_POST["password"];
session_start();

$queryCheck = "SELECT COUNT(*) FROM person WHERE username='$username'";
$check = $db->prepare($queryCheck);
$check->execute();

if($check == 1) {
    $_SESSION['name'] = $username;
    header( "Location: https://rocky-reef-99024.herokuapp.com/project1/ski.php");
}
else {
    header( "Location: https://rocky-reef-99024.herokuapp.com/project1/signIn.php/?type=invalid");
}

die();
?>