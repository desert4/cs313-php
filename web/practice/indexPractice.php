<h1 style="text-align: center">Scripture Resources</h1>
<?php
    session_start();

    $book = $_POST["book_name"];
    $_SESSION["book"] = $book;

    require "dbConnect.php";
    $db = get_db();

    $scriptures = $db->prepare("SELECT * FROM Scriptures WHERE book='$book'");
    $scriptures->execute();

    while ($fRow = $scriptures->fetch(PDO::FETCH_ASSOC))
    {
        $book = $fRow["book"];
        $chapter = $fRow["chapter"];
        $verse = $fRow["verse"];
        $content = $fRow["content"];

        echo "<p><a href='https://rocky-reef-99024.herokuapp.com/practice/page1.php'><b>$book $chapter:$verse</b></a></p>";
    }
?>