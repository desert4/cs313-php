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
    <form action="confirmation.php" method="$_POST" class=".resort">
        <h3>Please provide the following information</h3>
        <label>Name</label>
        <input type="text" name="fname" id="fname"><br>
        <label>Street Address</label>
        <input type="text" name="street" id="street"><br>
        <label>City</label>
        <input type="text" name="city" id="city"><br>
        <label>State</label>
        <input type="text" name="state" id="state"><br>
        <label>Zip Code</label>
        <input type="text" name="zip" id="zip"><br>
        <input type="reset" name="Reset" value="reset">
        <input type="submit" name="Submit" value="submit">
    </form>
    <form action="" method="POST">
        <input type="submit" name="return" value="Return To Cart">
    </form>
</body>

</html>

<?php 
if (isset($_POST['return'])) {
    header("Location: https://rocky-reef-99024.herokuapp.com/project1/cart.php");
    exit;
}

?>