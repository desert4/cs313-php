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
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="icon" href="./Images/skier.png">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    // chack to see if the user exsists already
    if ($check == '1') {
        echo "<div class='resort'><p>The username that you have entered, $username, has already been taken.  Please click the button to return to the previous page to pick a different username.";
        echo "<form action='./newUser.php' method='POST'>";
        echo  "<input type='submit' value='Go Back' name='submit'></form></div>";
    } else {
        try {
            // hash the password
            $passwordHash = password_hash("$password", PASSWORD_DEFAULT);

            // store the user
            $query = "INSERT INTO person(username, password, email) VALUES (:username, :password, :email)";
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $passwordHash);
            $statement->bindValue(':email', $email);
            $statement->execute();
        } catch (Exception $ex) {
            echo "Error with DB. Details: $ex";
            die();
        }

        // set the session username
        $_SESSION['name'] = $username;

        // redirect to the home page
        header('Refresh: 2; URL=https://rocky-reef-99024.herokuapp.com/project1/ski.php');
        die();
        }

    ?>
</body>

</html>
