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
    <link rel="icon" href="./Images/skier.png">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include 'skiNavBar.php' ?>
    <h1>Ski Every Day</h1>

    <?php
    // check the search box
    if (!$_GET['search']) {
        $query = "SELECT * FROM resort";
    } else {
        $searchValue = $_POST['search'];
        $query = "SELECT * FROM resort WHERE name='$searchValue'";
    }
    $resorts = $db->prepare("$query");
    $resorts->execute();
    
    // display the resorts
    while ($fRow = $resorts->fetch(PDO::FETCH_ASSOC)) {
        $resortId = $fRow["id"];
        $userId = $fRow["name"];
        $city = $fRow["city"];
        $state = $fRow["state"];
        $rating = $fRow["rating"];
        $runs = $fRow["runs"];

        echo "<div class='resort>";

        $user_name = $db->prepare("SELECT username FROM person WHERE id='$userId'");
        $user_name->execute();

        while ($tRow = $user_name->fetch(PDO::FETCH_ASSOC)) {
            $name = $tRow["username"];

            echo "<h3>$name</h3>";
        }

        echo "<p>Location: $city, $state</p>";
        echo "<p>Rating: $rating</p>";
        echo "<p>Runs: $runs</p><hr>";

        // display the reviews
        $reviewQuery = "SELECT * FROM review WHERE place='$resortId'";
        $reviews = $db->prepare("$reviewQuery");
        $reviews->execute();

        while ($sRow = $reviews->fetch(PDO::FETCH_ASSOC)) {
            $reviewId = $sRow["id"];
            $place = $sRow["place"];
            $reviewer = $sRow["reviewer"];
            $date = $sRow["date"];
            $reviewRating = $sRow["rating"];

            echo "<h4>$reviewer</h4>";
            echo "<p>Date of review: $date<p>";
            echo "<p>Rating: $reviewRating</p>";
        }
        echo "</div>";
    }
    ?>

    <!-- <div class="resort">
        <h3>Kelly Canyon</h3>
        <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg"><img src="http://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg" alt="Kelly Canyon"></a>
        <p>Location: Ririe, Idaho</p>
        <p>Number of runs: 27</p>
        <p>Normal Buisiness: light - medium</p>
        <p>Rating: 3.4</p>
    </div> -->
</body>

<?php
// CHECK THE BUTTONS

// if(isset($_POST['PebbleButton'])) {
//     $_SESSION['PEBBLE'] = $_POST['pebble'];
// }
?>

</html>