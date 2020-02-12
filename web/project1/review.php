<?php
require("dbConnect.php");
$db = get_db();

// if (!$_SESSION['name']) {
//     header("Location: https://rocky-reef-99024.herokuapp.com/project1/signIn.php");
// }
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
    <div class="resort">
        <form action="" method="POST">
            <label for="resort">Select the resort</label>
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
            </select>
        </form>
    </div>
</body>

</html>