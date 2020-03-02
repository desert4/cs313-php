<?php
session_start();

// conection to the database
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
    <p>this is the home page</p>
    <?php
    // get the query
        $query = "SELECT * FROM job";
        $job = $db->prepare("$query");
        $job->execute();

        while ($row = $job->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $name = $row["name"];
            $cost = $row["cost"];
            $time = $row["time_estimate"];

            echo "<h1>The job id is $id and the job type is a $name.  The cost is $cost and it should take $time days.";
        }
    ?>
</body>

</html>