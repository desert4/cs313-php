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
    <form action="" method="POST">
        <div class="resort">
            <h3>Kelly Canyon</h3>
            <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg"><img src="http://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg" alt="Kelly Canyon"></a>
            <p>Location: Ririe, Idaho</p>
            <p>Number of runs: 27</p>
            <p>Normal Buisiness: light - medium</p>
            <p>Rating: 3.4</p>
            <select  id="Kelly" name="kelly">
                <option value="Kel1">$33 (Half Day)</option>
                <option value="Kel2">$44 (3/4 Day)</option>
                <option value="Kel3">$50 (Full Day)</option>
            </select>
            <input type="submit" name="KellyButton" value="Add To Cart">
        </div>
        <div class="resort">
            <h3>Grand Targhee</h3>
            <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/GrandTargheeTrails.jpg"><img src="https://rocky-reef-99024.herokuapp.com/project1/Images/GrandTargheeTrails.jpg" alt="Grand Targhee"></a>
            <p>Location: Alta, Wyoming</p>
            <p>Number of runs: 97</p>
            <p>Normal Buisiness: medium</p>
            <p>Rating: 4.2</p>
            <select id="Targhee" name="targhee">
                <option value="Targ1">$79 (weekday)</option>
                <option value="Targ2">$84 (weekend)</option>
            </select>
            <input type="submit" name="TargheeButton" value="Add To Cart">
        </div>
        <div class="resort">
            <h3>Pebble Creek</h3>
            <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/PebbleCreekTrails.jpg"><img src="https://rocky-reef-99024.herokuapp.com/project1/Images/PebbleCreekTrails.jpg" alt="Pebble Creek"></a>
            <p>Location: Inkom, Idaho</p>
            <p>Number of runs: 54</p>
            <p>Normal Buisiness: medium</p>
            <p>Rating: 3.9</p>
            <select id="Pebble" name="pebble">
                <option value="Pebble1">$52 (Full Day)</option>
                <option value="Pebble2">$41 (Half Day)</option>
                <option value="Pebble3">$22 (Beginner Lift)</option>
                <option value="Pebble4">$208 (5 Day)</option>
            </select>
            <input type="submit" name="PebbleButton" value="Add To Cart">
        </div>
</form>
</body>

<?php
    // CHECK THE BUTTONS
    if(isset($_POST['KellyButton'])) {
        $_SESSION['KELLY'] = $_POST['kelly'];
    }

    if(isset($_POST['TargheeButton'])) {
        $_SESSION['TARGHEE'] = $_POST['targhee'];
    }

    if(isset($_POST['PebbleButton'])) {
        $_SESSION['PEBBLE'] = $_POST['pebble'];
    }
?>
</html>