<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION['favcolor'];
   $a = $_SESSION['favanimal'];

?>
<h1>Your favorite color is <?=$c?> and your favorite animal is <?=$a?> <?php // use the session variables ?></h1>
<?php ?>