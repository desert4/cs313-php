<?php
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>

<head>
   <title>Week 6 class activity</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
   <div class="container">
      <h1>Create a Note for a Course</h1>
      <form id="mainForm" action="insert.php" method="POST">
         <!-- dropdown of the students -->
         <select name="student_name" id="student_name">
            <?php
            $statement = $db->prepare("SELECT * FROM w6_student");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
               $id = $row['id'];
               $name = $row['name'];
               echo "<option value='$id'>$name</option>";
            }
            ?>
         </select>
         <br><br>
         <div class="row">
            <div class="form-group col">
               <label for="courseNote">Title</label>
               <input class="form-control" name="noteTitle" rows="3" />
            </div>
            <div class="form-group col">
               <label for="courseNote">Note</label>
               <textarea class="form-control" name="courseNote" rows="3"></textarea>
            </div>
            <div class="form-group col">
               <label for="inputCourse">Class</label>
               <select id="student_class" name="student_class">
                  <!-- dropdwown of the classes -->
                  <?php
                  $statement = $db->prepare("SELECT * FROM w6_course");
                  $statement->execute();
                  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                     $id = $row['id'];
                     $name = $row['name'];
                     $number = $row['number'];
                     echo "<option value='$id'>$name</option>";
                  }
                  ?>
               </select>
            </div>
            <div class="row">
               <div class="col">
                  <input class="btn btn-primary" type="submit" value="Save Note" />
               </div>
            </div>
         </div>
      </form>
   </div>
</body>

</html>