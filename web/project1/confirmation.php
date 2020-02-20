<?php
// this page was for week 3 only and is not included in any links in the final project
session_start();
$fname = htmlspecialchars($_POST["fname"]);
$street = htmlspecialchars($_POST["street"]);
$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);
$zip = htmlspecialchars($_POST["zip"]);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="icon" href="./web/images/Rebel_Logo_logo.jpg">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
    <script src="ski.js"></script>
</head>

<body>
    <?php include 'skiNavBar.php' ?>

    <div class=".resort">
        <h3>Thank You For Your Purchase</h3>
        <p>Your products:</p>
        <?php
            if(isset($_SESSION['KELLY'])) {
                echo "Kelly Canyon Lift Ticket<br><br>";
            } 
            if(isset($_SESSION['TARGHEE'])) {
                echo "Grand Targhee Lift Ticket<br><br>";
            } 
            if(isset($_SESSION['PEBBLE'])) {
                echo "Pebble Creek Lift Ticket<br><br>";
            } 
        ?>
        <p>Your items will be shipped to:</p>
        <p><?php
        echo "$fname <br> $street <br> $city <br> $state <br> $zip";
        ?>
    </div>
</body>
</html>