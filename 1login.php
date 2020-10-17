<!DOCTYPE html>
<html>


<head>

<title>Project 1</title>
<link rel="stylesheet" type="text/css" href="main.css">

</head>


<body>


    <button href='1login.php'>Login:</button>
    <button href='2registration.php'>Register:</button>
    <button href='3question_forum.php'>Question Forum:</button>
    <br>



    <h2>Login Forum</h2>
    <input type="text" name="Email" placeholder="Type Email Address" value="">
    <br>
    <input type="password" placeholder="Type Password" name="password">
    <br>
    <input type="submit">



<!--post from week 5 git example -->
<?php

$email_address = filter_input(type:INPUT_POST,'email address');
$password = filter_input(type:INPUT_POST,'password');


$email_address = (isset($email_address)) ? $email_address : '';
$password = (isset($password)) ? $password : '';


?>




    <!--submit-->

    
















    <!--not sure if this is right-->
    <process_data class="php"></process_data>
  


   




    


</body>

</html>