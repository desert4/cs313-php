<?php
session_start();

// get the variables from the previous page
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

// connect to the database
require("dbConnect.php");
$db = get_db();

// check the database to see if the username already exsists
$queryCheck = "SELECT COUNT(*) FROM person WHERE username='$username'";
$check = $db->prepare($queryCheck);
$check->execute();

if($check == 1) {
    header( "Location: https://rocky-reef-99024.herokuapp.com/project1/newUser.php?type=invalid");
}
// if it doesnt exist, create the user
else {
    try
    {
        // hash the password
        $passwordHash = password_hash("$password", PASSWORD_DEFAULT);
        
        // store the user
        $query = "INSERT INTO person(username, password, email) VALUES (:username, :password, :email)";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $passwordHash);
        $statement->bindValue(':email', $email);
        $statement->execute();
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }

    // set the session username
    $_SESSION['name'] = $username;
}

header('Refresh: 2; URL=https://rocky-reef-99024.herokuapp.com/project1/ski.php');
die();
?>