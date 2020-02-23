<?php
session_start();

// connect to the database
require("dbConnect.php");
$db = get_db();

// get the information entered on the previous page
$username = $_POST["username"];
$password = $_POST["password"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Check</title>
    <link rel="icon" href="./Images/skier.png">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
</head>

<?php

// check the database for the user
$queryCheck = "SELECT COUNT(*) FROM person WHERE username='$username'";
$check = $db->prepare($queryCheck);
$check->execute();

// if found redirect to the home page
if($check == 1) {
    echo "<h1>found the user</h1>";
    // get the hashed password
    $passwordQuery = "SELECT * FROM person WHERE username='$username'";
    $getPass = $db->prepare("$passwordQuery");
    $getPass->execute();

    while ($sRow = $getPass->fetch(PDO::FETCH_ASSOC)) {
        $personId = $sRow["id"];
        $hashedPassword = $sRow["password"];
    }

    // check the password
    if(password_verify($password, $hashedPassword)) {
        $_SESSION['name'] = $username;
        header( "Location: https://rocky-reef-99024.herokuapp.com/project1/ski.php");    
    } 
    else {
        echo "<div class='resort'><p>The password that you have entered is incorrect. Please try again";
        echo "<form action='./signIn.php' method='POST'>";
        echo  "<input type='submit' value='Try Again' name='submit'></form></div>";
    }
    die();
}
// if not in the database redirect back to sign in page with error
else {
    echo "<div class='resort'><p>The username that you have entered is registered. Please try again";
    echo "<form action='./signIn.php' method='POST'>";
    echo  "<input type='submit' value='Try Again' name='submit'></form></div>";
}

die();
