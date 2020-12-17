<?php

require('pdo.php');


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


?>


<html>
<head>
  <link rel="stylesheet" type="text/css" href="test.css">
  <h1>Project 2</h1>
</head>
    <body>
        <a href=".?action=display_question_form&userId=<?php echo $userId; ?>">Add Questions</a>
        <a href=".?action=display_questions&userId=<?php echo $usrId; ?>&listType=mine">My Questions</a>
        <a href=".?action=display_questions&userId=<?php echo $usrId; ?>&listType=all">All Questions</a>

        <table>
            <tr>
                <th>NAME</th>
                <th>BODY</th>
            </tr>
            <?php foreach ($questions as $question) : ?>
                <tr>
                    <td><?php echo $question['title']; ?> </td>
                    <td><?php echo $question['body']; ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <form action="index.php" method="post">
            <input type="hidden" name="action" value="submit_question">
            <input type="hidden" name="userId" value="<?php echo $userId; ?>">
            

   <form action="." method="post">
                <input type="hidden" name="action" value="delete_question">
                <input type="hidden" name="questionId" value="<?php echo $question['id']; ?>">
                <input type="hidden" name="userId" value="<?php echo $userId; ?>">
               
                <input type="submit" value="Delete">
            </form>




            <div class="form-group">
                <label for="title">Question Title</label>
                <input type="text" name="title">
            </div>

            <div class="form-group">
                <label for="body">Question body</label>
                <input type="text" name="title">
            </div>

            <div class="form-group">
                <label for="skills">Question skills</label>
                <input type="text" name="skills">
            </div>




            <input type="submit" class="btn btn-primary" value="Add Question">
        </form>

     

        <div>
            Question: <?php echo $question; ?>
        </div>
        <div>
            Question Body: <?php echo $question_body; ?>
        </div>
        <div>
            Question Skills: <?php  print_r($question_skills); ?>
        </div>

        <br>
        <h3>Links</h3>
        <li class="active"><a href="1login.php">Login</a></li>
        <li><a href="2registration.php">Register</a></li>
        <li><a href="3question_form.php">Question</a></li>

    </body>
</html>
