<?php
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
session_start();

require("dbConnect.php");
$db = get_db();

$queryCheck = "SELECT COUNT(*) FROM person WHERE username='$username'";
$check = $db->prepare($queryCheck);
$check->execute();

if($check == '1') {
    header( "Location: https://rocky-reef-99024.herokuapp.com/project1/newUser.php/?type=invalid");
}
else {
    try
    {
        $query = "INSERT INTO person(username, password, email) VALUES (:username, :password, :email)";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':email', $email);
        $statement->execute();
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }
    $_SESSION['name'] = $username;
}

header('Refresh: 10; URL=https://rocky-reef-99024.herokuapp.com/project1/ski.php');
die();
?>