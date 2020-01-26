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
    <form action="" method="POST">
    <?php
    // if (!isset($_SESSION['KELLY']) || !isset($_SESSION['TARGHEE']) || !isset($_POST['PebbleButton'])) {
    //     echo "There are no itemss on your cart";
    // } 
    ?>
    <?php 
    if (isset($_SESSION["KELLY"])) {
        echo "Your lift pass to Kelly Canyon is ";
        if($_SESSION["KELLY"] == "Kel1") {
            echo "$33";
        }
        elseif ($_SESSION["KELLY"]) {
            echo "$44";
        }
        else {
            echo "$50";
        }
        echo '<input type="submit" name="remove1" value="remove item">';
    }
    ?>
        </form>
    <?php 
    if (isset($_POST["remove1"])) {
        unset($_SESSION["KELLY"]);
    }
    ?>
</body>