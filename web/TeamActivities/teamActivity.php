<?php
//get post data
$email    = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$major    = htmlspecialchars($_POST['major']);
$name     = htmlspecialchars($_POST['name']);
$comments = htmlspecialchars($_POST['comments']);
$continent = isset($_POST['continent']) ? $_POST['continent'] : array();

//display the data data
echo "Name: $name <br>";
echo "<a href='mailto:$email'>$email</a><br>"; //making this a link
echo "Major: $major <br>";
echo "Comments: $comments <br>";
echo "You have selected the continents: <br>"; 
foreach($continent as $value) {
    echo " " . $value . "<br>";
}
?>
