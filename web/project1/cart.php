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
            if ($_SESSION["KELLY"] == "Kel1") {
                echo "$33";
            } elseif ($_SESSION["KELLY"] == "Kel2") {
                echo "$44";
            } else {
                echo "$50";
            }
            echo '<input type="submit" name="remove1" value="remove item">';
        }
        ?>

        <br>

        <?php
        if (isset($_SESSION["TARGHEE"])) {
            echo "Your lift pass to Grand Targhee is ";
            if ($_SESSION["KELLY"] == "Targ1") {
                echo "$79";
            } else {
                echo "$84";
            }
            echo '<input type="submit" name="remove2" value="remove item">';
        }
        ?>

        <br>

        <?php
        if (isset($_SESSION["PEBBLE"])) {
            echo "Your lift pass to Pebble Creek is ";
            if ($_SESSION["PEBBLE"] == "Pebble1") {
                echo "$52";
            } elseif ($_SESSION["PEBBLE"] == "Pebble2") {
                echo "$41";
            } elseif ($_SESSION["PEBBLE"] == "Pebble3") {
                echo "$22";
            } else {
                echo "$208";
            }
            echo '<input type="submit" name="remove3" value="remove item">';
        }
        ?>
        <input type="submit" name="Checkout" value="checkout">
        <input type="submit" name="Browse" value="Back To Browse">

    </form>
    <?php
    if (isset($_POST["remove1"])) {
        unset($_SESSION["KELLY"]);
        header("Location: https://rocky-reef-99024.herokuapp.com/project1/cart.php");
        exit;
    }

    if (isset($_POST["remove2"])) {
        unset($_SESSION["TARGHEE"]);
        header("Location: https://rocky-reef-99024.herokuapp.com/project1/cart.php");
        exit;
    }

    if (isset($_POST["remove3"])) {
        unset($_SESSION["PEBBLE"]);
        header("Location: https://rocky-reef-99024.herokuapp.com/project1/cart.php");
        exit;
    }

    if (isset($_POST["Browse"])) {
        header("Location: https://rocky-reef-99024.herokuapp.com/project1/ski.php");
        exit;
    }
    ?>
</body>