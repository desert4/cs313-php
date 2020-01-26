<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="./web/images/Rebel_Logo_logo.jpg">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
    <script src="ski.js"></script>
</head>

<body>
    <?php include 'skiNavBar.php' ?>
    <h1>Ski Every Day</h1>
    <form action="" method="POST" onclick="updateCart()">
        <div class="resort">
            <h3>Kelly Canyon</h3>
            <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg"><img src="http://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg" alt="Kelly Canyon"></a>
            <p>Location: Ririe, Idaho</p>
            <p>Number of runs: </p>
            <p>Normal Buisiness: light - medium</p>
            <p>Rating: 3.4</p>
            <select>
                <option value="Kel1">$33 (Half Day)</option>
                <option value="Kel2">$44 (3/4 Day)</option>
                <option value="Kel3">$50 (Full Day)</option>
            </select>
            <button>ADD TO CART</button>
        </div>
        <div class="resort">
            <h3>Grand Targhee</h3>
            <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/GrandTargheeTrails.jpg"><img src="https://rocky-reef-99024.herokuapp.com/project1/Images/GrandTargheeTrails.jpg" alt="Grand Targhee"></a>
            <p>Location: Alta, Wyoming</p>
            <p>Number of runs: 27</p>
            <p>Normal Buisiness: medium</p>
            <p>Rating: 4.2</p>
            <select>
                <option value="Targ1">$79 (weekday)</option>
                <option value="Targ2">$84 (weekend)</option>
            </select>
            <button>ADD TO CART</button>
        </div>
        <div class="resort">
            <h3>Pebble Creek</h3>
            <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/PebbleCreekTrails.jpg"><img src="https://rocky-reef-99024.herokuapp.com/project1/Images/PebbleCreekTrails.jpg" alt="Pebble Creek"></a>
            <p>Location: Inkom, Idaho</p>
            <p>Number of runs: 27</p>
            <p>Normal Buisiness: medium</p>
            <p>Rating: 3.9</p>
            <select>
                <option value="pebble1">$52 (Full Day)</option>
                <option value="pebble2">$41 (Half Day)</option>
                <option value="pebble3">$22 (Beginner Lift)</option>
                <option value="pebble4">$208 (5 Day)</option>
            </select>
            <button>ADD TO CART</button>
        </div>

    </form>
</body>

</html>