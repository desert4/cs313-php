<?php
// retrieve variables from form

// get time
date_default_timezone_set("America/Denver");
$time = date("h:i:sa");

require("dbConnect.php");
$db = get_db();

try
{
   // insert into note table
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: notes.php/?courseId=$course");

die(); 
?>
