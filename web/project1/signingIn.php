<?php
session_start();


// connect to the database
require("dbConnect.php");
$db = get_db();

// get the information entered on the previous page
$username = $_POST["username"];
$password = $_POST["password"];
echo "<h1>this page loaded</h1>";

// check the database for the user
$queryCheck = "SELECT COUNT(*) FROM person WHERE username='$username' AND password='";
$check = $db->prepare($queryCheck);
$check->execute();


// if found redirect to the home page
if($check == 1) {
//     // get the hashed password
//     $passwordQuery = "SELECT * FROM person WHERE username='$username'";
//     $getPass = $db->prepare("$passwordQuery");
//     $getPass->execute();

//     // while ($sRow = $getPass->fetch(PDO::FETCH_ASSOC)) {
//     //     $personId = $sRow["id"];
//     //     $hashedPassword = $sRow["password"];
//     // }

//     // // check the password
//     // if(password_verify($password, $hashedPassword)) {
        $_SESSION['name'] = $username;
        header( "Location: https://rocky-reef-99024.herokuapp.com/project1/ski.php");    
    } 
    // else {
    //     header( "Location: https://rocky-reef-99024.herokuapp.com/project1/signIn.php/?type=invalidpassword");

    // }
//     die();
// }
// // if not in the database redirect back to sign in page with error
else {
    header( "Location: https://rocky-reef-99024.herokuapp.com/project1/signIn.php/?type=invalidname");
}

die();
