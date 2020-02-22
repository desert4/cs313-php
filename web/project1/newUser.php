<?php
session_start();

// connect to the database
require "dbConnect.php";
$db = get_db();

// check to see if the form has already been submitted
$invalid = $_GET['type'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="./Images/skier.png">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include 'skiNavBar.php' ?>
    <div class="resort">
        <!-- form to create user -->
        <form action="createUser.php" method="POST">
            <label>Please enter the username you want: </label><br>
            <input type="text" name="username" placeholder="username" required>
            <?php
            if (isset($invalid)) {
                echo "<p style='color: red'>the username you entered is already taken, please choose a different username</p>";
            }
            ?>
            <br><br><label>Please enter your password: </label><br>
            <input type="password" name="password" placeholder="password" required><br><br>
            <label>Please enter your email: </label><br>
            <input type="text" name="email" placeholder="example@email.com" required><br><br>
            <input type="reset" value="Reset">
            <input type="submit" value="Create">
        </form>
    </div>
</body>