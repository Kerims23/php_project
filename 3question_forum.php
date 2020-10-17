<!DOCTYPE html>
<html>


<head>

<title>Project 1</title>
<link rel="stylesheet" type="text/css" href="main.css">

</head>


<body>
    <header>
    <h1>Project 1</h1>
    </header>

    <button href='1login.php'>Login:</button>
    <button href='2registration.php'>Register:</button>
    <button href='3question_forum.php'>Question Forum:</button>
    <br>



    <h2>Question Forum</h2>
    <input type="text" name="question" placeholder="Type Username" value="">
    <br>
    <input type="text" name="question_body" placeholder="Answer body" value="">
    <br>
    <input type="array" name="question_skills" placeholder="Add skill" value="">
    <br>
    <input type="submit">








    
    <!--not sure if this is right-->
    <process_data class="php"></process_data>
  




<!--post from week 5 git example -->

<?php
$question = filter_input(type:INPUT_POST,'question');
$question_body = filter_input(type:INPUT_POST,'question body');
$question_skills = function filter_input_array(type:INPUT_POST,'question skills');




$question = (isset($question)) ? $question : '';
$question_body = (isset($question_body)) ? $question_body : '';
$question_skills = ($question_skills !== NULL) ? $question_skills : array();
?>
   
   
   




    


</body>

</html>