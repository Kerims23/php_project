<?php
require('pdo.php');
require('account.php');
require('accounts_db.php');
require('questions_db.php');

session_start();



$action=filter_input(INPUT_POST,'action');
if($action==NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action==NULL){
        $action='show_login';
    }
}

switch ($action){
    case 'show_login':{
        if ($_SESSION['userId']){
            header("location: index.php?action=display_users");
        }else{
            include('1login.php');
        }
        break;
    }

    case'validate_login':{
        $email = filter_input(INPUT_POST,'email_address');
        $password = filter_input(INPUT_POST,'password');
        if ($email == NULL || $password == NULL){
            echo ' you must type in a email';
            echo"<br>";
        }else{
            $user=accounts_db::validate_login($email,$password);
            $userId=$user->getId();
            //$userId=validate_login($email,$password);
            if($userId!==false){
                $_SESSION['userId']=$userId;
                header("location: index.php?action=display_users");
            }else{
                echo "invaliad login";
            }
    
        }
    
        break;
    }


    case'display_users':{
        $userId=$_SESSION['$userId'];
        if ($userId ==NULL){
            echo 'UserId not available';
        } else{
            $questions = get_questions_by_ownerId($userId);
            include('6questions_form_display.php');
        }
        break;
    }

    case 'logout':{
        destroy_session();
        $_SESSION=array();
        $name=session_name();
        $expire=strtotime('-1 year');
        $params=session_get_cookie_params();
        setcookie($name, '',$expire,$params['path'],$params['domain'],$params['secure'],$params['httponly']);
        break;
    }

    case 'display_registration':{
        include('5registration_display.php');
        break;
    }

    case 'display_questions':{
        $userId=filter_input(INPUT_GET, 'userId');
        $listType=filter_input(INPUT_GET,'listType');
        if($userId==NULL || $userId<0){
            header('location: .?action=display_login');
        }else{
            $questions=($listType === 'all') ? get_all_questions(): get_users_questions($userId);
            include('6question_form_display.php');
        }
        break;
    }
    
    case 'display_questions_form':{
        $userId=filter_input(INPUT_GET, 'userId');
        if($userId==NULL || $userId<0){
            header('location: .?action=display_login');
        }else{
            include('6question_form_display.php');
        }
        break;
    }
    
    
    case 'submit_question':{
        $userId=filter_input(INPUT_POST,'userId');
        $title=filter_input(INPUT_POST,'title');
        $body=filter_input(INPUT_POST,'body');
        $skills=filter_input(INPUT_POST,'skills');
        if($userId==NULL || $title==NULL || $body==NULL || $skills==NULL){
            echo 'Error';
        }else{
            create_question($title,$body,$skills,$userId);
            header("location: .?action=display_questions&userId=$userId");
    }
    
        break;
    }

    case 'delete_question':{
        $questionId = filter_input(INPUT_POST, 'questionId');
        $userId = filter_input(INPUT_POST, 'userId');
        if ($questionId == NULL || $userId == NULL) {
            $error = 'Please enter your information';
            include('error.php');
        } else {
            delete_question($questionId);
            header("Location: .?action=display_questions&userId=$userId");
        }
        break;
    }




    default:{
        $error = 'Error';
        include('errors.php');
    }
}

?>