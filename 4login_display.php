<?php
//login form
$email_address = filter_input(type:INPUT_POST,variable_name:'email_address');
$password = filter_input(type:INPUT_POST,variable_name:'password');

if ($email_address < 1){
    echo 'you must type in a email'
}else ('@'($email_address,FILTER_VALIDATE_EMAIL)==(false){
    echo 'email does not have @'
}
#make sure it is not empty and contains @ for email
#make sure password is not empty and accpets minimum of 8 characters 
#

?>
