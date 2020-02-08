<!DOCTYPE html>
<html>
<?php
session_start();

require "dbConnect.php";
$db = get_db();
?>
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
    <form action='' method="$_POST">
        <div class="resort">
            <label for="username"><b>Username:</b> </label>
            <input type="text" id="username" name="username" placeholder="username" required><br><br>
            <label><b>Password:</b> </label>
            <input type="text" id="password" name="password" placeholder="password" required><br><br>
            <button type="submit">Login</button>
        </div>
    </form>
</body>

<?php
if (isset($_POST["username"])) {
    if (isset($_POST["password"])) {
        $name = $_POST["username"];
        $passphrase = $_POST["password"];
    
        $user = $db->prepare("SELECT COUNT(*) FROM person WHERE username='$name' AND password='$passphrase'");
        $user->execute();
    }

    if ($user == 1) {
        echo "Your information for $name is correct";
    } else {
        echo "could not find $name";
    }
}
?>

</html>