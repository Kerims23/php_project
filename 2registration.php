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


    
    <h2>Register Forum</h2>
    <input type="text" name="first_name" placeholder="Type First name" value="">
    <br>
    <input type="text"  name="last_name" placeholder="Type Last name" value="">
    <br>
    <input type="date"  name="date" placeholder="Enter Birthday" value="">
    <br>
    <input type="email"  name="email_address" placeholder="Enter Email Address" value="">
    <br>
    <input type="password" placeholder="Type Password" name="password">
    <br>
    <input type="submit">

    

    <!--not sure if this is right-->    
    <process_data class="php"></process_data>
  




<!--post from week 5 git example -->

<?php
	// POST Values from Form 
	$first_name = filter_input(INPUT_POST, 'first_name');
	$last_name = filter_input(INPUT_POST, 'last_name');
    $birthday = filter_input(INPUT_POST, 'birthday');
    $email_for_reg = filter_input(INPUT_POST, 'email_for_reg');
    $password_for_reg = filter_input(INPUT_POST, 'password_for_reg');

    $first_name = (isset($first_name)) ? $first_name : '';
    $last_name = (isset($last_name)) ? $last_name : '';
    $birthday = (isset($birthday)) ? $birthday : '';
    $email_for_reg = (isset($email_for_reg)) ? $email_for_reg : '';
    $password_for_reg = (isset($password_for_reg)) ? $password_for_reg : '';
    
	



    
?>




    <!--email-->






    <!--submit-->





   




    


</body>

</html>