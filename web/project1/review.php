<?php
session_start();

// connect to the database
require("dbConnect.php");
$db = get_db();

if (!isset($_SESSION['name'])) {
    header("Location: https://rocky-reef-99024.herokuapp.com/project1/signIn.php");

    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave a review</title>
    <link rel="icon" href="./Images/skier.png">
    <link href="navigation.css" rel="stylesheet" type="text/css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link href="resort.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- include the nav bar -->
    <?php include 'skiNavBar.php' ?>
    <div class="resort">
        <!-- form for creating a new review -->
        <form action="insertReview.php" method="POST">
            <label for="resort">Select the resort: </label><br>
            <!-- get all of the resorts in the database and use them as options -->
            <select id="resort" name="resort">
                <?php
                $statement = $db->prepare("SELECT id, name FROM resort");
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    echo "<option value='$id'>$name</option>";
                }
                ?>
            </select><br><br>
            <label for="rating">Rating:</label><br>
            <select id="rating" name="rating">
                <option value="0">0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
            </select><br><br>
            <button type="submit" id="submit" name="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>