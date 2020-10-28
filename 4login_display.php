<?php
//login form
$email_address = filter_input(INPUT_POST,'email_address');
$password = filter_input(INPUT_POST,'password');

if ($email_address == NULL){
    echo ' you must type in a email';
    echo"<br>";
}

if ($password == NULL){
    echo ' you must type in password';
    echo"<br>";
}






?>





<html>
<head><title>Display Login Info</title></head>

<body>
    <div>
        Email Address: <?php echo $email_address; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>

</body>
</html>