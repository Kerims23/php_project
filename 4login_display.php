<?php

require('pdo.php');


//login form




case'validate_login':{
    $email = filter_input(INPUT_POST,'email_address');
    $password = filter_input(INPUT_POST,'password');

    if ($email == NULL){
        echo ' you must type in a email';
        echo"<br>";
    }else{
        $userID=validate_login($email,$password);
        if($userID==false){
            header(string:"location: .?action=display_registration");
        }else{
            header(string:"location: .?action=display_questions&userID=$userID")
        }

    }

    break;
}

if ($password == NULL){
    echo ' you must type in password';
    echo"<br>";
}


case 'display_registration';{
    include('views/5registration_display.php');
    break;
}


case 'display_questions':{
    $userID=filter_input(type:INPUT_GET, variable_name:'userID');
    if($userID==NULL || $userID<0){
        header(string:'location: .?action=display_login');
    }else{
        $questions=get_users_questions($userID);
        include('views/6question_forum.php')
    }
    break;
}

case 'display_questions_forum':{
    $userID=filter_input(type:INPUT_GET, variable_name:'userID');
    if($userID==NULL || $userID<0){
        header(string:'location: .?action=display_login');
    }else{
        include('views/6question_forum.php')
    }
    break;
}


case 'submit_question';{
    $userID=filter_input(type:INPUT_POST,variable_name:'userID');
    $title=filter_input(type:INPUT_POST,variable_name:'title');
    $body=filter_input(type:INPUT_POST,variable_name:'body');
    $skills=filter_input(type:INPUT_POST,'skills');
    if($userID==NULL || $title==NULL || $body==NULL || $skills==NULL){
        echo 'Error'
    }else(
        create_question($title,$body,$skills,$userID);
        header(string:"location: .?action=display_questions&userID=$userID");
    )

    break;
}

//if user was found display questions, if not found redirect to registration for all forums
//sql query


function validate_login($email,$password){
    $db=Database::getDB();
    $query='SELECT * FROM accounts WHERE email=:email_address AND password=:password';
    $statement=$db->prepare($query);
    $statement->bindValue(parameter:':email',$email_address);
    $statement->bindValue(parameter:':password',$password);
    $statement->execute();
    $user=$statement->fetch();
    $statement->close_cursor();

    if(count($user)>0){
        return $user['id'];
    }else{
        return false;
    }


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
        <li><a href="3question_forum.php">Question</a></li>
        <br>

    </body>
</html>