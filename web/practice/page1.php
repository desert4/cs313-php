<h1 style="text-align: center">Scripture Details</h1>
<?php
session_start();
$book = $_SESSION["book"];
    
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

    echo "<p>\"$content\"</p>";
}



?>
