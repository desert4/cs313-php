<?php
//get post data
$email    = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$major    = htmlspecialchars($_POST['major']);
$name     = htmlspecialchars($_POST['name']);
$comments = htmlspecialchars($_POST['comments']);

//display the data data
echo "Name: $name <br>";
echo "<a href='$email'>$email</a><br>"; //making this a link

echo "Comments: $comments <br>";
?>
