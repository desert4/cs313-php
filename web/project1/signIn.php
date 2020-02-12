<!DOCTYPE html>
<html>
<?php
session_start();

require "dbConnect.php";
$db = get_db();
?>

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
        <form action='signingIn.php' method="POST">
            <label for="username"><b>Username:</b> </label>
            <input type="text" id="username" name="username" placeholder="username" required><br><br>
            <label><b>Password:</b> </label>
            <input type="text" id="password" name="password" placeholder="password" required><br><br>
            <button type="submit" name="submitButton" id="submit" value="Login">Login</button>
        </form>
        <a href="newUser.php"><button type="button">New Member</button></a>
    </div>

</body>

<?php
?>

</html>