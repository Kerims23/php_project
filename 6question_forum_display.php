<?php

//new question form
$question = filter_input(type:INPUT_POST,variable_name:'question');
$question_body = filter_input(type:INPUT_POST,variable_name:'question_body');
$question_skills = function filter_input(INPUT_POST,'question_skills');
$question_skills = explode(',', $question_skills);
$question_skills = ($question_skills !== NULL) ? $question_skills : array();




#conditions for question 
if ($question < 1){
    echo 'Answer the question'
}
else ($question < 3){
    echo 'name must be greater than 3 characters'
}


#conditions for question body
if ($question_body < 1){
    echo 'Response must be greater than 1 character and less than 500'
}
else ($question_body > 500){
    echo 'Response must be greater than 1 character and less than 500'
}


#conditions for question skills
if (empty($question_skills)){
    echo 'add more skills'
}
else($question_skills >2){
    echo 'minimum of 3 skills or more'
}

#question cannot be empty and at least 3 characters 

#question body cannot be empty and less than 500 characters 

#question skills needs to display skills in an array seperate by comman
#minimum of 2 skills must be entered


?>
