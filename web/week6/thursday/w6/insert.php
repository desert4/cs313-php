<?php
// retrieve variables from form
$student_name = $_POST['student_name'];
$note_title = $_POST['noteTitle'];
$course_note = $_POST['courseNote'];
$student_class = $_POST['student_class'];

// get time
date_default_timezone_set("America/Denver");
$time = date("h:i:sa");

require("dbConnect.php");
$db = get_db();

// get date
$date = date("y-m-d");
try
{
	// insert into note table
	$query = "INSERT INTO w6_note(course_id, student_id, title, content, date, time) VALUES(:course, :student, :title, :content, :date, :time)";
	$statement = $db->prepare($query);
	$statement->bindValue(':course', $student_class);
	$statement->bindValue(':student', $student_name);
	$statement->bindValue(':title', $note_title);
	$statement->bindValue(':content', $course_note);
	$statement->bindValue(':date', $date);
	$statement->bindValue(':time', $time);
	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: notes.php/?courseId=$student_class");

die();
