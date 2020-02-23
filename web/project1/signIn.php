<!DOCTYPE html>
<html>
<?php
session_start();

//connect to the database
require "dbConnect.php";
$db = get_db();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="icon" href="./Images/skier.png">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- display the nav bar -->
    <?php include 'skiNavBar.php' ?>
    <div class="resort">
        <!-- form for sign in information -->
        <form action='signingIn.php' method="POST">
            <label for="username"><b>Username:</b> </label>
            <input type="text" id="username" name="username" placeholder="username" required><br><br>
            <label><b>Password:</b> </label>
            <input type="password" id="password" name="password" placeholder="password" required><br><br>
            <button type="submit" name="submitButton" id="submit" value="Login">Login</button>
        </form>

        <!-- give the option to create a new user -->
        <a href="newUser.php"><button type="button">New Member</button></a>
    </div>

</body>

<?php
?>

</html>