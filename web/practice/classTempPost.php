<?php 
$email = htmlspecialchars($_POST["emailForPHP"]);
$password = htmlspecialchars($_POST["passwordForPHP"]);

echo "this is your email $email, and your password is $password";
?>
<html>
    <body>
        <button>Checkout?</button>
    </body>
</html>