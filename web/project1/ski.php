<?php
session_start();

require "dbConnect.php";
$db = get_db();
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

    <?php
    $resorts = $db->prepare("SELECT * FROM resort");
    $resorts->execute();
    
    while ($fRow = $resorts->fetch(PDO::FETCH_ASSOC)) {
        $name = $fRow["name"];
        $city = $fRow["city"];
        $state = $fRow["state"];
        $rating = $fRow["rating"];
        $runs = $fRow["runs"];

        echo "<div class='resort'><h3>$name</h3>";
        echo "<p>Location: $city ,$state</p>";
        echo "<p>Rating: $rating</p>";
        echo "<p>Runs: $runs</p></div>";
    }
    ?>

    <div class="resort">
        <h3>Kelly Canyon</h3>
        <!-- <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg"><img src="http://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg" alt="Kelly Canyon"></a> -->
        <p>Location: Ririe, Idaho</p>
        <p>Number of runs: 27</p>
        <p>Normal Buisiness: light - medium</p>
        <p>Rating: 3.4</p>
    </div>
    <div class="resort">
        <h3>Grand Targhee</h3>
        <!-- <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/GrandTargheeTrails.jpg"><img src="https://rocky-reef-99024.herokuapp.com/project1/Images/GrandTargheeTrails.jpg" alt="Grand Targhee"></a> -->
        <p>Location: Alta, Wyoming</p>
        <p>Number of runs: 97</p>
        <p>Normal Buisiness: medium</p>
        <p>Rating: 4.2</p>
    </div>
    <div class="resort">
        <h3>Pebble Creek</h3>
        <!-- <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/PebbleCreekTrails.jpg"><img src="https://rocky-reef-99024.herokuapp.com/project1/Images/PebbleCreekTrails.jpg" alt="Pebble Creek"></a> -->
        <p>Location: Inkom, Idaho</p>
        <p>Number of runs: 54</p>
        <p>Normal Buisiness: medium</p>
        <p>Rating: 3.9</p>
    </div>
</body>

<?php
// CHECK THE BUTTONS

// if(isset($_POST['PebbleButton'])) {
//     $_SESSION['PEBBLE'] = $_POST['pebble'];
// }
?>

</html>