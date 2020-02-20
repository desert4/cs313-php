<?php
session_start();
?>

<!--
    This is the navigation bar for the entire website
    --------
    Home: the home page that displays all of the resorts
    Sign in: a page that allows users to sign in or create a new user
    Review: page that allows the user to leave a review for any of the resorts in the database
    --------
    Search bar looks for exact name matching the entry
    username is displayed next to task bar
-->
<nav>
    <ul class="navigation">
        <li><a class="active" href="ski.php">Home</a></li>
        <li>
            <!-- this is a search box -->
            <form action="ski.php" method="GET"><input type="text" placeholder="Search..." name="search" id="search"></form>
        </li>
        <li><a href="review.php">Review</a></li>
        <!-- display the username in the nav bar-->
        <li><?php echo $_SESSION['name']; ?></li>
        <li><a href="signIn.php">Sign in</a></li>
    </ul>
</nav>