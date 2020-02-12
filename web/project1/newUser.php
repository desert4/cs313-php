<?php
require "dbConnect.php";
$db = get_db();
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
    <script src="ski.js"></script>
</head>

<body>
    <?php include 'skiNavBar.php' ?>
    <div class="resort">
        <form action="ski.php" method="POST">
            <label>Please enter the username you want: </label>
            <input type="text" placeholder="username"><br><br>
            <label>Please enter your password: </label>
            <input type="password" placeholder="password"><br><br>
            <label>Please enter your email: </label>
            <input type="text" placeholder="password"><br><br>
            <input type="submit" value="Create">
        </form>
    </div>
</body>