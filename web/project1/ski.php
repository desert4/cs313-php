<?php
session_start();

require "dbConnect.php";
$db = get_db();

$numberReviews = 0;
$reviewTotal = 0;
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
        $name = $fRow["name"];
        $city = $fRow["city"];
        $state = $fRow["state"];
        $rating = $fRow["rating"];
        $runs = $fRow["runs"];

        echo "<div class='resort'><h3>$name</h3>";
        echo "<p>Location: $city, $state</p>";
        echo "<p>Default Rating: $rating";
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

            // do the math to add to reviews
            $numberReviews += 1;
            $reviewTotal += $reviewRating;

            $userQuery = "SELECT * FROM person WHERE id=$reviewer";
            $getName = $db->prepare("$userQuery");
            $getName->execute();
            
            // display the resorts
            while ($tRow = $getName->fetch(PDO::FETCH_ASSOC)) {
                $user_name = $tRow["username"];

                echo "<h4>$user_name</h4>";
            }

            // echo "<h4>$reviewer</h4>";
            echo "<p>Date of review: $date<p>";
            echo "<p>Rating: $reviewRating</p>";
        }

        // do the math to get the overall total
        $user_rating = ($reviewTotal/$numberReviews);
        //display the rating
        echo "<hr><p>Members rating: $user_rating</p>";
        echo "</div>";
    }
    ?>

</body>

<?php
// CHECK THE BUTTONS

// if(isset($_POST['PebbleButton'])) {
//     $_SESSION['PEBBLE'] = $_POST['pebble'];
// }
?>

</html>