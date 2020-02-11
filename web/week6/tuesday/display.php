<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            // retrieve url parameter
            $personId = $_GET['personId'];
            // execute query to pull up data from that id
            $statemnt = $db->prepare('SELECT * FROM w6_user WHERE ID = :personId');
            $statemnt->bindValue(':personId', $personId);
            $statemnt->execute();
            while ($row = $statemnt->fetch(PDO::FETCH_ASSOC)) {
               $id = $row['id'];
               $first = $row['first_name'];
               $last = $row['last_name'];
               $food_id = $row['food_type'];

               $statemnt2 = $db->prepare('SELECT food FROM w6_food WHERE ID = $food_id');
               $statemnt2->execute();
                  while ($frow = $statemnt2->fetch(PDO::FETCH_ASSOC)) {
                     $food = $frow['food'];
                  }

               echo "<h1>$first $last's favorite food is $food</h1>";
            }
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>