<?php
require('database/pdo.php');
require('database/accounts_db.php');
require('database/questions_db.php');

$action=filter_input(type:INPUT_POST,variable_name:'action');
if($action==NULL){
    $action = filter_input(type:INPUT_GET, variable_name:'action');
    if ($action==NULL){
        $action='show_login'
    }
}

switch ($action){
    case 'show_login':{
        include('views/1login.php');
        break;
    }

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
    

    default:{
        $error = 'Error'
        include('views/errors.php');
    }
}

