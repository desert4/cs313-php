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
</head>

<body>
    <?php include 'skiNavBar.php' ?>
    <h1>Ski Every Day</h1>
    <div class="resort">
        <form action="" method="POST" class="resort">

            <h3>Kelly Canyon</h3>
            <a href="https://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg"><img src="http://rocky-reef-99024.herokuapp.com/project1/Images/KellyCanyonMap.jpg" alt="Kelly Canyon"></a>
            <div style="padding: 15px; float: left">
                <p>Location: Ririe, Idaho</p>
                <p>Number of runs: </p>
                <p>Normal Buisiness: light - medium</p>
                <p>Rating: 3.4</p>
                <select>
                    <option value="Half Day">$33 (12:30-5:00 or 5:00-9:00)</option>
                    <option value="Full Day">$44 (9:30-5:00 or 12:30-9:00)</option>
                    <option value="Entire Day">$50 (9:30-9:00)</option>
                </select>
            </div>
        </form>
    </div>
</body>

</html>