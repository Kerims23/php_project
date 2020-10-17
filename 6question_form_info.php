<?php

//new question form
$question = filter_input(type:INPUT_POST,variable_name:'question');
$question_body = filter_input(type:INPUT_POST,variable_name:'question body');



//do i need function before each filter_input. What does it do?

$question_skills = function filter_input_array(type:INPUT_POST,variable_name:'question skills');
#or
$skills = array(
    'Skill_1' =>
)






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
$question_skills = filter_input(INPUT_POST, 'skills');
$question_skills = explode(',', $question_skills);

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
