<?php

require('pdo.php')


//new question form
$question = filter_input(INPUT_POST,'question');
$question_body = filter_input(INPUT_POST,'question_body');
$question_skills = filter_input(INPUT_POST,'question_skills');
$question_skills = explode(',', $question_skills);
$question_skills = ($question_skills !== NULL) ? $question_skills : array();


#conditions for question 
if (strlen($question) < 1){
    echo ' Answer the question';
    echo"<br>";
}
elseif (strlen($question) < 3){
    echo ' name must be greater than 3 characters';
    echo"<br>";
}


#conditions for question body
if (strlen($question_body) < 1){
    echo ' Response must be greater than 1 character and less than 500';
    echo"<br>";
}
elseif (strlen($question_body) > 500){
    echo ' Response must be greater than 1 character and less than 500';
    echo"<br>";
}


#conditions for question skills
if (count($question_skills) <3){
    echo ' minimum of 3 skills or more';
    echo"<br>";
}





//sql query

function get_user_questions($userID){
    global $db;
    $query='SELECT * From questions WHERE ownerID= :userID';
     $statement=db->prepare($query);
     $statement->bind_value(':userID',$userID);
     $statement->execute();
     $questions_forum=$statement->fetch_all();
     $statement->close_cursor();

     return $questions_forum
}

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
<head><title>Display Login Info</title></head>

<body>
    <div>
        Question: <?php echo $question; ?>
    </div>
    <div>
        Question Body: <?php echo $question_body; ?>
    </div>
    <div>
        Question Skills: <?php  print_r($question_skills); ?>
    </div>


</body>
</html>
