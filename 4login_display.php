<?php

require('pdo.php');


//login form




if ($password == NULL){
    echo ' you must type in password';
    echo"<br>";
}




//if user was found display questions, if not found redirect to registration for all forums
//sql query



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
        <li><a href="3question_forum.php">Question</a></li>
        <br>

    </body>
</html>