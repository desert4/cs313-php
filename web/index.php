
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="./images/Rebel_Logo_logo.jpg">
    <link href="index1.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- header("Location: https://rocky-reef-99024.herokuapp.com/index.html"); -->
  <nav>
        <ul class="navigation">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#ABOUT">About</a></li>
            <li><a href="directory.html" id="directory">Directory</a></li>
        </ul>
    </nav>
    <div class="grid-container">
        <div class="header">
            <h1>Welcome to my homepage</h1>
        </div>
        <div class="main">
            <a name="ABOUT"></a>
            <p>My name is Brighton. I am a student studying Sfotware Engineering. I enjoy doing web design amoung a few
                other hobbies. To the right is a picture of myself.</p>
            <p> I recently started a web design buisness with one of my friends. I enjoy just about anything outdoors,
                but specifically skiing and soccer. When I enjoy playing board games when I am not fortunate enough to
                be able to go outside.</p>
        </div>
        <div class="right">
            <img class="profile" src="./images/Personal Picture Square.jpg" alt="Personal Picture">
        </div>
        <div class="footer">
            <hr>
            <p>Copyright 2020</p>
            <div></div>
            <?php include 'time.php'; ?>
        </div>
    </div>
</body>

</html>
