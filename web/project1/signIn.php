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
    <form action="ski.php" method="$_POST">
        <div class="resort">
            <label for="username"><b>Username:</b> </label>
            <input type="text" id="username" placeholder="username" required><br>
            <label><b>Password:</b> </label>
            <input type="text" id="password" placeholder="password" required><br>
            <button type="submit">Login</button>
        </div>
    </form>
</body>

</html>