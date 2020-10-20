<?php
//registration form
$first_name = filter_input(type:INPUT_POST,variable_name:'first_name');
$last_name = filter_input(type:INPUT_POST,variable_name:'last_name');
$birthday = filter_input(type:INPUT_POST,variable_name:'birthday');
$email_for_reg = filter_input(type:INPUT_POST,variable_name:'email');
$password_for_reg = filter_input(type:INPUT_POST,variable_name:'password');

if($first_name <1){
    echo 'enter a first name'
}

if($last_name <1){
    echo 'enter a last name'
}

if($birthday <1){
    echo 'enter a birthday'
}

if($email_for_reg <1){
    echo 'enter a email address'
}else('@'($email_address,FILTER_VALIDATE_EMAIL)==(false){
    echo 'email does not have @'

if($password_for_reg <8){
    echo 'enter a password with at least 8 characters'
}

#make sure they cannot be submitted empty
#make sure it is not empty and contains @ for email
#make sure password is not empty and accpets minimum of 8 characters 


?>

<!DOCTYPE html>
<html>


<head>

<title>Project 1</title>
<link rel="stylesheet" type="text/css" href="main.css">

</head>


<body>
    <main>
    <h1>Project 1</h1>

    <label>Email:</label>






    </main>


</body>

</html>