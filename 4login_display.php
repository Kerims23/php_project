<?php

require('pdo.php');


$email_address = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');

if ($email_address==NULL)
    echo "type in an email address";
    echo"<br>";

if ($password == NULL){
    echo ' you must type in password';
    echo"<br>";
}


?>






<html>
<head>
  <link rel="stylesheet" type="text/css" href="test.css">
  <h1>Project 2</h1>
</head>
    <body>
        <h2>Display page</h2>
        <div>
            Email Address: <?php echo $email_address; ?>
        </div>
        <div>
            Password: <?php echo $password; ?>
        </div>
        <br>
        <h3>Links</h3>
        <li class="active"><a href="1login.php">Login</a></li>
        <li><a href="2registration.php">Register</a></li>
        <li><a href="3question_form.php">Question</a></li>
        <br>

    </body>
</html>