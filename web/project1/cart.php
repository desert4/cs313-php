<?php
session_start();
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
    <?php
    if (!isset($_SESSION['KELLY']) || !isset($_SESSION['TARGHEE']) || !isset($_POST['PebbleButton'])) {
        echo "There are no itemss on your cart";
    } else { ?>
        <form action="" method="POST">
            <input type="submit" name="remove" value="remove item">
        </form>
    <?php } ?>
</body>