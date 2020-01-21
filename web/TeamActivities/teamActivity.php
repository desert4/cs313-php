<?php
//get post data
$email    = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$major    = htmlspecialchars($_POST['major']);
$name     = htmlspecialchars($_POST['name']);
$comments = htmlspecialchars($_POST['comments']);
//do stuff with the data
echo "Email: $email<br> Password: $password";
?>
