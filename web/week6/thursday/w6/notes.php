<?php
	require("dbConnect.php");
	$db = get_db();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Show Notes</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
         <?php
				// get and display course header
					// this should include all course information (outside of the id)
				$course_id = $_GET['courseId'];
				$statement = $db->prepare("SELECT * FROM w6_course WHERE id=$course_id");
				$statement->execute();
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
					$id = $row['id'];
					$name = $row['name'];
					$number = $row['number'];
					echo "<h2>$name</h2>";
					echo "<p>Course ID: $id";
					echo "<p>Course number: $number";
				}
				
				// get and display notes for course
				// this should include all note information, including the name of the individual that wrote the note
				$statement = $db->prepare("SELECT * FROM w6_note where course_id=$course_id");
				$statement->execute();
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
					$id = $row['id'];
					$course = $row['course_id'];
					$student = $row['student_id'];
					$title = $row['title'];
					$content = $row['content'];
					$date = $row['date'];
					$time = $row['time'];

					// get the name of the student
					$statement2 = $db->prepare("SELECT * FROM w6_student WHERE id=$student");
					$statement2->execute();
					while ($sRow = $statement2->fetch(PDO::FETCH_ASSOC)) {
						$student_id = $sRow['id'];
						$student_name = $sRow['name'];

						echo "<h3>$student_name</h3>";
					}

					echo "<p>Not ID: $id";
					echo "<p>Course ID: $course";
					echo "<p>Student: $student";
					echo "<p>Title: $title";
					echo "<p>Content: $content";
					echo "<p>date: $date";
					echo "<p>time: $time";
				}
				// this should look professional
            
         ?>

		</div>
	</body>
</html>