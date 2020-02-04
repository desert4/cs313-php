<h1 style="text-align: center">Scripture Resources</h1>
<?php
    require "dbConnect.php";
    $db = get_db();

    $scriptures = $db->prepare("SELECT * FROM Scriptures");
    $scriptures->execute();

    while ($fRow = $scriptures->fetch(PDO::FETCH_ASSOC))
    {
        $book = $fRow["book"];
        $chapter = $fRow["chapter"];
        $verse = $fRow["verse"];
        $content = $fRow["content"];

        echo "<p><b>$book $chapter:$verse - </b>'$content'</p>";
    }
?>