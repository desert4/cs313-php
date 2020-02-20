<?php
session_start();

// connect to the database
require("dbConnect.php");
$db = get_db();

// get the information entered on the previous page
$username = $_POST["username"];
$password = $_POST["password"];

// check the database for the user
$queryCheck = "SELECT COUNT(*) FROM person WHERE username='$username'";
$check = $db->prepare($queryCheck);
$check->execute();

// if found redirect to the home page
if($check == 1) {
    $_SESSION['name'] = $username;
    header( "Location: https://rocky-reef-99024.herokuapp.com/project1/ski.php");
}

// if not in the database redirect back to sign in page with error
else {
    header( "Location: https://rocky-reef-99024.herokuapp.com/project1/signIn.php/?type=invalid");
}

die();
