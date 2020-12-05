<?php

require('pdo.php');


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

//if user was found display questions, if not found redirect to registration for all forums
//sql query


$user = function validate_login($email_address,$password){
    global $db;
    $query='SELECT * FROM accounts WHERE email=:email_address AND password=:password';
    $statement=db->prepare($query);
    $statement->bind_value(':email_address',$email_address);
    $statement->bind_value(':password',$password);
    $statement->execute();
    $user=$statement->fetch();
    $statement->close_cursor();

    return $user

}




//css type 
//november 11 and do part 2 

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