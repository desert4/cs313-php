<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION['favcolor'];
   $a = $_SESSION['favanimal'];

?>
<h1>Your favorite color is <?=$c?> and your favorite animal is <?=$a?> </h1>

<h3>Stuff</h3>
<?php // use the session variables 
if(isset($_SESSION['pictureUrl'])) { ?>
   <h3>Here is the stuff from the form</h3>
   <img src="<?=$_SESSION['pictureUrl']?>">
<?php } ?>