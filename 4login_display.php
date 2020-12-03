<?php

require('pdo.php')


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


function validate_login($email_address,$password){
    global $db;
    $query='SELECT * FROM accounts WHERE email_address=:email_address AND password=:password';
    $statement=db->prepare($query);
    $statement->bind_value(':email_address',$email_address);
    $statement->bind_value(':password',$password);
    $statement->execute();
    $user=$statement->fetch();
    $statement->close_cursor();



}


//do i need to insert into or redirect to registration and how do i do so? just link??
 


//this is from question_forum
function create_question ($title,$body,$skills,$ownerID){
    global $db;

    $query = 'INSERT INTO questions
    (:title,:body,:skills,:ownerID)';

    $statement=$db->prepare($query);
    $statement->bind_value(':ownerID',$ownerID);
    $statement->bind_value(':question',$question);
    $statement->bind_value(':question_body',$question_body);
    $statement->bind_value(':question_skills',$question_skills);

    $statement->execute();
    $statement->close_cursor();
}





?>





<html>

<head><title>Display Login Info</title> <></head>


<body>
    <div>
        Email Address: <?php echo $email_address; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>

</body>
</html>