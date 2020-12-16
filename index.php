<?php
require('pdo.php');
require('accounts_db.php');
require('questions_db.php');

$action=filter_input(type:INPUT_POST,variable_name:'action');
if($action==NULL){
    $action = filter_input(type:INPUT_GET, variable_name:'action');
    if ($action==NULL){
        $action='show_login';
    }
}

switch ($action){
    case 'show_login':{
        include('1login.php');
        break;
    }

    case'validate_login':{
        $email = filter_input(INPUT_POST,'email_address');
        $password = filter_input(INPUT_POST,'password');
    
        if ($email == NULL){
            echo ' you must type in a email';
            echo"<br>";
        }else{
            $userId=Accounts_db::validate_login($email,$password);
            $userId=$user->getId();
            $userId=validate_login($email,$password);
            if($userId==false){
                header(string:"location: .?action=display_registration");
            }else{
                header(string:"location: .?action=display_questions&userId=$userId");
            }
    
        }
    
        break;
    }

    case 'display_registration':{
        include('5registration_display.php');
        break;
    }

    case 'display_questions':{
        $userId=filter_input(type:INPUT_GET, variable_name:'userId');
        if($userId==NULL || $userId<0){
            header(string:'location: .?action=display_login');
        }else{
            $questions=get_users_questions($userId);
            include('6question_forum_display.php');
        }
        break;
    }
    
    case 'display_questions_forum':{
        $userId=filter_input(type:INPUT_GET, variable_name:'userId');
        if($userId==NULL || $userId<0){
            header(string:'location: .?action=display_login');
        }else{
            include('6question_forum_display.php');
        }
        break;
    }
    
    
    case 'submit_question';{
        $userId=filter_input(type:INPUT_POST,variable_name:'userId');
        $title=filter_input(type:INPUT_POST,variable_name:'title');
        $body=filter_input(type:INPUT_POST,variable_name:'body');
        $skills=filter_input(type:INPUT_POST,'skills');
        if($userId==NULL || $title==NULL || $body==NULL || $skills==NULL){
            echo 'Error'
        }else{
            create_question($title,$body,$skills,$userId);
            header(string:"location: .?action=display_questions&userId=$userId");
    }
    
        break;
    }
    

    default:{
        $error = 'Error';
        include('errors.php');
    }
}

