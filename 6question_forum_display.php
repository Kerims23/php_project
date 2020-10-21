<?php

//new question form
$question = filter_input(INPUT_POST,'question');
$question_body = filter_input(INPUT_POST,'question_body');
$question_skills = function filter_input(INPUT_POST,'question_skills');
$question_skills = explode(',', $question_skills);
$question_skills = ($question_skills !== NULL) ? $question_skills : array();


#conditions for question 
if ($question < 1){
    echo ' Answer the question';
    echo"<br>";
}
else ($question < 3){
    echo ' name must be greater than 3 characters';
    echo"<br>";
}


#conditions for question body
if ($question_body < 1){
    echo ' Response must be greater than 1 character and less than 500';
    echo"<br>";
}
else ($question_body > 500){
    echo ' Response must be greater than 1 character and less than 500';
    echo"<br>";
}


#conditions for question skills
if (empty($question_skills)){
    echo ' add more skills';
    echo"<br>";
}
else($question_skills >2){
    echo ' minimum of 3 skills or more';
    echo"<br>";
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
        Question Skills: <?php echo $question_skills; ?>
    </div>

</body>
</html>
